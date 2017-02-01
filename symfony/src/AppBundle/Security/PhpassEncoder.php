<?php
namespace AppBundle\Security;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Hautelook\Phpass\PasswordHash;
/**
 * A password encoder that uses Phpass for encoding
 *
 * @author Baldur Rensch <brensch@gmail.com>
 */
class PhpassEncoder implements PasswordEncoderInterface
{
    public function encodePassword($raw, $salt)
    {
        $hasher = new PasswordHash(8, false);
        $hashedPassword = $hasher->hashPassword($raw);
        return $hashedPassword;
    }
    public function isPasswordValid($encoded, $raw, $salt)
    {
        $hasher = new PasswordHash(8, false);
        return $hasher->CheckPassword($raw, $encoded);
    }
}
