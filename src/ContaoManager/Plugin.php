<?php

namespace Schachbulle\ContaoSchiedsrichterverteilerBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Schachbulle\ContaoSchiedsrichterverteilerBundle\ContaoSchiedsrichterverteilerBundle;

class Plugin implements BundlePluginInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getBundles(ParserInterface $parser)
	{
		return [
			BundleConfig::create(ContaoSchiedsrichterverteilerBundle::class)
				->setLoadAfter([ContaoCoreBundle::class, \Contao\NewsletterBundle\ContaoNewsletterBundle::class]),
		];
	}
}
