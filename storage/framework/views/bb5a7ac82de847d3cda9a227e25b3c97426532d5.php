<div class="card">
    <div class="card-header">
        <h2>System Information
            <small>To best assist you in any issues you encounter, please provide this information (ideally as a link to a <a href="https://gist.github.com/" target="_blank">Gist</a>) when requested by support staff.</small>
        </h2>
    </div>
    <div class="card-body card-padding">
        <pre id="system-info">
            <code>
### Begin System Info ###

## Please include this information when requesting technical support ##

-- Site Info

SITE_URL:                   <?php echo e($data['url']); ?>

SITE_IP:                    <?php echo e($data['ip']); ?>

SITE_TIMEZONE:              <?php echo e($data['timezone']); ?>


-- Webserver Configuration

PHP_VERSION:                <?php echo e($data['phpVersion']); ?>

DATABASE_CONNECTION:        <?php echo e($data['dbConnection']); ?>

WEB_SERVER:                 <?php echo e($data['webServer']); ?>


-- User Browser

User Agent String:          <?php echo e($data['userAgentString']); ?>


-- PHP Configuration

PHP_MEMORY_LIMIT:           <?php echo e($data['phpMemoryLimit']); ?>

PHP_TIME_LIMIT:             <?php echo e($data['phpTimeLimit']); ?>


-- PHP Extensions

cURL:                       <?php echo e($data['curl']); ?>

cURL Version:               <?php echo e($data['curlVersion']); ?>

GD:                         <?php echo e($data['gd']); ?>

PDO:                        <?php echo e($data['pdo']); ?>

SQLite:                     <?php echo e($data['sqlite']); ?>

OpenSSL:                    <?php echo e($data['openssl']); ?>

MBString:                   <?php echo e($data['mbstring']); ?>

Tokenizer:                  <?php echo e($data['tokenizer']); ?>

Zip:                        <?php echo e($data['zip']); ?>


-- Canvas Configuration

CANVAS_VERSION:             <?php echo e($data['version']); ?>

LAST_INDEX_RUN:             <?php echo e($data['lastIndex']); ?>

THEME:                      <?php echo e($data['active_theme_theme']->getName().' '.$data['active_theme_theme']->getVersion()); ?>


### End System Info ###
            </code>
        </pre>
    </div>
</div>
