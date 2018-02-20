<?php

namespace App\Controller\Panel;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PaymentController extends Controller
{
    public static function __setupNavigation()
    {
        return [
            [
                'type'   => 'group',
                'parent' => 'root',
                'id'     => 'payment',
                'title'  => 'Billing',
                'icon'   => 'fa fa-fw fa-credit-card',
            ],
            [
                'type'   => 'link',
                'parent' => 'payment',
                'id'     => 'plans',
                'title'  => 'Plans',
                'href'   => 'plans',
                'view'   => 'PaymentController::plans',
            ],
            [
                'type'   => 'link',
                'parent' => 'payment',
                'id'     => 'payment_methods',
                'title'  => 'Payment methods',
                'href'   => 'payment',
                'view'   => 'PaymentController::payment',
            ],
        ];
    }

    public static function __callNumber()
    {
        return 20;
    }

    public function plans($navigation)
    {
        return $this->render('panel/plans.html.twig', [
            'navigation_links' => $navigation,
        ]);
    }

    public function payment()
    {
        return $this->render('bundles/TwigBundle/Exception/error404.html.twig', ['status_code' => '', 'status_text' => '']);
    }
}
