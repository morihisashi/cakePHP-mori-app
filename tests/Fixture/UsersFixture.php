<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'nickname' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'auth' => 1,
                'registration_flag' => 1,
                'deleted' => 1,
                'created' => '2023-07-05 00:08:30',
                'modified' => '2023-07-05 00:08:30',
            ],
        ];
        parent::init();
    }
}
