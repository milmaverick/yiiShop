<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $date
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property int $sum
 * @property string $status
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'name', 'email', 'phone', 'address'],
             'required','message' => 'Заполните это поле'],
            [['name', 'email', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    public function validatePhoneEmailEmpty()
    {
        if(empty($this->phone) && empty($this->email))
        {
            $errorMsg= 'Укажите ваш email или телефон';
            $this->addError('phone',$errorMsg);
            $this->addError('email',$errorMsg);
        }
        if(!empty($this->phone) && (strlen($this->phone)<7))
        {
        $errorMsg= 'Слишком мало цифр в номере телефона';
        $this->addError('phone',$errorMsg);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'sum' => 'Sum',
            'status' => 'Status',
        ];
    }
}
