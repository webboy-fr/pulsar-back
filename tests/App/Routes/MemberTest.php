<?php

namespace App\Routes;

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class MembersTest extends FeatureTestCase {

    use DatabaseTestTrait, FeatureTestTrait;

    //1 Créer les membre
    public function testAddMember() {

        $result = $this->call('post', 'member', [
            'firstname' => 'Pierre',
            'lastname'  => 'Durand',
        ]);

        $this->assertTrue($result->isOK());

    }

}