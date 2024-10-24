<?php

namespace PrestaSafe\PsfImportLang\Command\Translations;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use PrestaShop\PrestaShop\Adapter\SymfonyContainer;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ImportLanguage extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('psf:translations:import')
            ->setDescription('Import a translation by iso code')
            ->setHelp('This command will import or update a translation package')
            ->addUsage('./bin/console psf:translations:import fr import fr translation package ')
            ->addArgument(
                'iso',
                InputOption::VALUE_REQUIRED,
                'iso of language to import ex: fr',
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $iso = $input->getArgument('iso');
        $languagePackImporter = SymfonyContainer::getInstance()->get('prestashop.adapter.language.pack.importer');
        $errors =  $languagePackImporter->import($iso);
        if (empty($errors)) {
            $output->write('lang '.$iso.' added !');
        }

        return 1;
    }
}
