<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

/**
 * User Model
 *
 */
class User extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'username';
    public $validate = [
        'username' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => 'ユーザーネームを入力してください'
            ],
        ],
        'email' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => 'メールアドレスを入力してください'
            ],
            'validEmail' => [
                'rule' => 'email',
                'message' => '正しいメールアドレスを入力してください'
            ],
            'emailExists' => [
                'rule' => ['isUnique'],
                'message' => '入力されたメールアドレスは既に登録されています'
            ],
        ],
        'password' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => 'パスワードを入力してください'
            ],
            // バリデーションにメソッドを指定
            'match' => [
                'rule' => 'passwordConfirm',
                'message' => 'パスワードが一致していません'
            ],
        ],
        'password_confirm' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => 'パスワード(確認)を入力してください'
            ],
        ],
        'role' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => '権限を入力してください'
            ],
        ],
    ];

    // カスタムバリデーションメソッド
    public function passwordConfirm($check) {

        // $check は ['password' => '入力された値']
        if ($check['password'] === $this->data['User']['password_confirm']) {
            return true;
        }

        return false;
    }

    public function beforeSave($options = []) {
        // パスワードをハッシュ化
        if (isset($this->data['User']['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();

            $this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
        }

        return true;
    }

}
