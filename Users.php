<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $mobile
 * @property integer $gender
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return 
        [
            [['name', 'username', 'password', 'email', 'mobile', 'gender'], 'required'],
            [['name', 'username', 'email', 'mobile'], 'trim'], 
            [['name', 'username'], 'string','min'=>3, 'max' => 30],
            [[ 'password', 'email'], 'string','min'=>6, 'max' => 100],
            [['email','username','mobile'], 'unique'],
            [['mobile'], 'string', 'min'=>10,'max' => 15],
            [['mobile'], 'number'],
            ['email', 'email'],
            [['gender'], 'integer'],
            
            // hiden it to be cant update it
            // [['created_at', 'updated_at'], 'safe'],
            // hashing password 
             ['password','match', 'pattern' => '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/',
             'message'=>"your password is week"],
             ['password', 'filter', 'filter' => function ($password) 
               {
                
                   $password= Yii::$app->getSecurity()->generatePasswordHash(
                    htmlentities(html_entity_decode($password))
                    );
                return $password;
                }
               
             ],

             ['name', 'filter', 'filter' => function ($name) 
               {
                $Name=htmlentities(html_entity_decode($name));
                      return $Name;
                }
             ],

             ['username', 'filter', 'filter' => function ($username) 
               {
                $Username=htmlentities(html_entity_decode($username));
                      return $Username;
                }
             ],

             ['email', 'filter', 'filter' => function ($email) 
               {
                $Email=htmlentities(html_entity_decode($email));
                      return $Email;
                }
             ],

             ];
         }



    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'gender' => 'Gender',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
