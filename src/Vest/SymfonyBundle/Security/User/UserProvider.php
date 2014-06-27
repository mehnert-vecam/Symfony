<?php
namespace Vest\SymfonyBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class UserProvider implements UserProviderInterface
{
    public function loadUserByUsername($usermail)
    {
        // make a call to your webservice here
        $person = $repository->findOneBy(array('personEmail' => $usermail));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
        // pretend it returns an array on success, false if there is no user

        if ($person) {
            $password = $person->getPassword();

            // ...

            return $person;
        }

        throw new UsernameNotFoundException(
            sprintf('Usermail "%s" existiert nicht.', $usermail)
        );
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof WebserviceUser) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Acme\WebserviceUserBundle\Security\User\WebserviceUser';
    }
}