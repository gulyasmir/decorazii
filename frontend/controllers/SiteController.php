<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use yii\helpers\Html;

use frontend\models\Banner;
use frontend\models\Bottom;
use frontend\models\Contact;
use frontend\models\Example;
use frontend\models\Galerey;
use frontend\models\Service;
use frontend\models\Video;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
		 $banners = Banner::find()->orderBy('sort_order')->all();
	   $examples = Example::find()->orderBy('sort_order')->all();
	   $bottoms = Bottom::find()->orderBy('sort_order')->all();
	   $services = Service::find()->orderBy('sort_order')->all();
	  
		
		
        return $this->render('index', [
                'banners' => $banners,
				 'examples' => $examples,
				  'bottoms' => $bottoms,
				  'services'  =>$services
            ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
		$contact = Contact::find()->where(['id'=>1])->one();
		
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
				'contact' => $contact
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionBlog()
    {
		
		$query = Video::find()->orderBy('sort_order');
		

		$pagination = new Pagination([
			'defaultPageSize' => 2,
			'totalCount' => $query->count()
		]);
		$blogs = $query->orderBy(['sort_order' => SORT_ASC])
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();
       return $this->render('blog', [
                'blogs' => $blogs,
				'count_pages' => $pagination->getPageCount(),
		'pagination' => $pagination
            ]);
    }
	
	 public function actionServices()
    {
		$services = Service::find()->orderBy('sort_order')->all();
		
        return $this->render('services', [
                'services' => $services,
            ]);
    }
	
	
  public function actionGalereya()
    {
		$galeries = Galerey::find()->orderBy('sort_order')->all();
		
        return $this->render('galereya', [
                'galeries' => $galeries,
            ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
  //  public function actionSignup()
//    {
//       $model = new SignupForm();
 //       if ($model->load(Yii::$app->request->post())) {
//            if ($user = $model->signup()) {
//                if (Yii::$app->getUser()->login($user)) {
//                    return $this->goHome();
//                }
//            }
//        }

//        return $this->render('signup', [
 //           'model' => $model,
 //       ]);
 //   }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Проверьте свою почту, там инструкция для восстановления пароля');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'К сожалению, мы не можем сбросить пароль для этой электронной почты ');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Новый пароль сохранен.  Зайдите в панель управления с новым паролем.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
