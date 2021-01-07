<?php


class SiteController extends DController
{

    public function actionHello()
    {
        return 'Hello World';
    }

    public function actionIndex()
    {
        if (isset($_POST['submit'])) {
            $kegiatan = $_POST['kegiatan'];
        }else {
            $kegiatan = 'masih kosong!';
        }

        return $this->render('index',['name'=>'my self', 'kegiatan' => $kegiatan]);
    }


    // public function actionLogin()
    // {
    //     $message = $username = $password = null;
    //     if (isset($_POST['submit'])) {
    //         $username = $_POST['username'];
    //         $password = $_POST['password'];

    //         if ($username == 'admin' && $password == 'admin') {
    //             Dee::$app->user->login($username);
    //             $this->redirect('index');
    //         } else {
    //             $message = 'Wrong username password';
    //         }
    //     }

    //     return $this->render('login', [
    //             'message' => $message,
    //             'username' => $username,
    //             'password' => $password,
    //     ]);
    // }

    // public function actionLogout()
    // {
    //     Dee::$app->user->logout();
    //     $this->redirect('index');
    // }

    // public function actionContoh()
    // {
    //     return $this->render('contoh');
    // }

    // public function actionPage($page)
    // {
    //     return $this->render('pages/' . $page);
    // }
}
