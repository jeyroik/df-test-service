<?php
namespace jeyroik\components\resolvers;

use gosp\webhooks\components\resolvers\ResolverAbstract;
use gosp\webhooks\interfaces\IServiceResolver;
use gosp\webhooks\components\jobs\JobAlwaysApply;
use gosp\webhooks\components\User;
use gosp\webhooks\interfaces\IHook;
use gosp\webhooks\interfaces\IJob;


/**
 * Class ResolverJira
 * @package gosp\webhooks\components\resolvers
 * @author Funcraft <aivanov@fix.ru>
 */
class NothingService extends ResolverAbstract implements IServiceResolver
{
    /**
     * Определяем job
     *
     * @param IHook $hook
     * @param $requestParams
     * @param $appParams
     * @param User $user
     * 
     * @return IJob
     */
    public function resolve($hook, $requestParams, $appParams, $user = null)
    {
        return new JobAlwaysApply([
            'nothing' => []
        ]);
    }
  
    /**
     * @return callable[]
     */
    public function getActionPilers($actionName)
    {
        return [];
    }
}
