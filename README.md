AcmeSassDemoBundle
=============

The small AcmeSassDemoBundle demonstrates the integration of [Sass][1] and [compass][2] functionality within Symfony2 and Assetic.


Installation
------------

First you have to go sure that Ruby is installed on your machine. Afterwards install Sass and compass:

    gem install sass
    gem install compass

Put the **SassDemoBundle** in the `src/Acme` folder of your Symfony2 project.


Register this bundle in your app/AppKernel

    if (in_array($this->getEnvironment(), array('dev', 'test'))) {
        $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
        $bundles[] = new Acme\SassDemoBundle\AcmeSassDemoBundle();
        $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
        $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
    }

---
Add this bundle to your app/config/routing.yml

    AcmeSassDemoBundle:
        resource: "@AcmeSassDemoBundle/Controller/"
        type:     annotation
        prefix:   /


---
Define the public gfx folders which are later used to read the images from and saving the generated sprite images to.

app/config/config.yml

    parameters:
        # Assetic
        assetic.filter.compass.images_dir: %kernel.root_dir%/../web
        assetic.filter.compass.http_path:  

---
Activate the usage of the controller in your dev settings and register the needed filters.

app/config/config_dev.yml

    assetic:
        debug: false
        use_controller: true # default: true
        filters:
            sass:    ~
            compass: ~

Demo
------------
Call this demo with `/demo/sass`. The resulting page is not very pretty, but after you look in the *.scss files in the `Resources/assets/css` folder
you will find out the power of Sass and compass very soon.

Idea
------------
The idea was taken from a discussion started in the [test.ical.ly blog][3].
The main installation part is explained in [Sass, Compass and Assetic in 10 minutes by Alexandre Salomé][4].

[1]: http://sass-lang.com/tutorial.html
[2]: http://compass-style.org/
[3]: http://test.ical.ly/2011/08/16/css-on-steroids-organise-your-sprites-and-stylesheets-with-sass-and-compass/
[4]: http://alexandre-salome.fr/blog/Sass-Compass-Assetic-In-Ten-Minutes
