<?php
namespace CustomCLICommand\Cloudfarecache\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Cloudfarecache extends Command
{
   protected function configure()
   {
       $this->setName('clear:cloudfarecache');
       $this->setDescription('Clear cloud cache');

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, 'https://api.cloudflare.com/client/v4/zones/ZONE-ID/purge_cache');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"purge_everything\":true}");
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');


      $headers = array();
      $headers[] = 'X-Auth-Email: user@example.com';
      $headers[] = 'X-Auth-Key: c2547eb745079dac9320b638f5e225cf483cc5cfdda42';
      $headers[] = 'Content-Type: application/json';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      curl_close ($ch);

       
       parent::configure();
   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
       $output->writeln("CloudFlare cache has been cleared");
   }
}