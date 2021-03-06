<?php


namespace Wearesho\Yii\Tests\Mocks;

use Wearesho\Yii\Validators\TokenValidator;

use yii\base\Model;

/**
 * Class TokenCheckModelMock
 * @package Wearesho\Yii\Tests\Mocks
 *
 * @internal
 */
class TokenCheckModelMock extends Model
{
    /** @var  string */
    public $token;

    /** @var  string */
    public $recipient;

    public $errorMessage;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['token', 'recipient',], 'required',],
            [['token', 'recipient'], 'string',],
            ['token', TokenValidator::class,
                'recipientAttribute' => 'recipient',
                'message' => $this->errorMessage,
            ],
        ];
    }
}
