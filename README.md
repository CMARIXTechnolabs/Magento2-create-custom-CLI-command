# Magento2 Create Custom CLI Command #
<a target="_blank" href="LICENSE"><img src="https://img.shields.io/badge/licence-MIT-brightgreen.svg" alt="license : MIT"></a>
<a target="_blank" href="https://www.cmarix.com/php-opensource-development-services.html"><img src="https://img.shields.io/badge/php-%5E7.0-blue.svg" alt="php : ^7.0"></a>
<a target="_blank" href="https://www.cmarix.com/magento-ecommerce-development-services.html"><img src="https://img.shields.io/badge/Magento2-%5E2.0-orange.svg" alt="Magento 2: ^2.0"></a>

## Description ##
This is an example of how to create custom CLI command for Magento 2. It will require to create a custom module in Magento 2 to create CLI command.

![Magento 2 custom CLI Command](https://www.cmarix.com/git/magento2/Magento2-create-custom-CLI-command.png "Magento 2 custom CLI Command")

In this repository, we have created on custom command for how to flush  [**Cloudflare**](https://www.cloudflare.com/ "Cloudflare") cache for Magento 2 website.

## Installation Guide ##
1. Upload the entire CustomCLICommand folder inside [root directory]/app/code
2. Make changes for Cloudflare configuration in following file
	    	
	    app/code/CustomCLICommand/Cloudfarecache/Console/Cloudfarecache.php
3. Enter your login email id of Cloudflare - e.g. 'user@example.com'
4. Enter X-Auth-Key of Cloudflare - [You can find the detail from this link for how to get the X-Auth Key.](https://support.cloudflare.com/hc/en-us/articles/200167836-Where-do-I-find-my-Cloudflare-API-key- "You can find the detail from this link for how to get the X-Auth Key.")
5. Run Magento 2 compilation commands
6. Run following command to clear cache of Cloudflare CDN.
	    	
	    php bin/magento clear:cloudfarecache
	     

## Let us know! ##
We’d be really happy if you sent us links to your projects where you use our component. Just send an email to [biz@cmarix.com](mailto:biz@cmarix.com "biz@cmarix.com") and do let us know if you have any questions or suggestion regarding Magento2 custom CLI command.

P.S. We’re going to publish more awesomeness examples on third party libaries, coding standards, plugins etc, in all the technology. Stay tuned!

## License ##

	MIT License
	
	Copyright © 2019 CMARIX TechnoLabs
	
	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.