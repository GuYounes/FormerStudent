<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_cef7f075b05ea06e2d742101323d67ce045b1b66beeba9dbcfba4f1acd990946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3913be9499aaa7f67debca306d66f1c57005b82d5a4507745a84764d67867bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3913be9499aaa7f67debca306d66f1c57005b82d5a4507745a84764d67867bc6->enter($__internal_3913be9499aaa7f67debca306d66f1c57005b82d5a4507745a84764d67867bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_390416f145b0a3741a78ae2d51dda2510bca74490697c8d5b90aa7e4203d53cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390416f145b0a3741a78ae2d51dda2510bca74490697c8d5b90aa7e4203d53cc->enter($__internal_390416f145b0a3741a78ae2d51dda2510bca74490697c8d5b90aa7e4203d53cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3913be9499aaa7f67debca306d66f1c57005b82d5a4507745a84764d67867bc6->leave($__internal_3913be9499aaa7f67debca306d66f1c57005b82d5a4507745a84764d67867bc6_prof);

        
        $__internal_390416f145b0a3741a78ae2d51dda2510bca74490697c8d5b90aa7e4203d53cc->leave($__internal_390416f145b0a3741a78ae2d51dda2510bca74490697c8d5b90aa7e4203d53cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a15181b7db0bb7c058df2ff96a31c1840c96aaa93178115c99a0c913b5d2b086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15181b7db0bb7c058df2ff96a31c1840c96aaa93178115c99a0c913b5d2b086->enter($__internal_a15181b7db0bb7c058df2ff96a31c1840c96aaa93178115c99a0c913b5d2b086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1882a37f5abcc7a3d9881e2a4b42ff11a1ef87a43c5c37c43a918c49a89e11fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1882a37f5abcc7a3d9881e2a4b42ff11a1ef87a43c5c37c43a918c49a89e11fd->enter($__internal_1882a37f5abcc7a3d9881e2a4b42ff11a1ef87a43c5c37c43a918c49a89e11fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1882a37f5abcc7a3d9881e2a4b42ff11a1ef87a43c5c37c43a918c49a89e11fd->leave($__internal_1882a37f5abcc7a3d9881e2a4b42ff11a1ef87a43c5c37c43a918c49a89e11fd_prof);

        
        $__internal_a15181b7db0bb7c058df2ff96a31c1840c96aaa93178115c99a0c913b5d2b086->leave($__internal_a15181b7db0bb7c058df2ff96a31c1840c96aaa93178115c99a0c913b5d2b086_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2525564dbb419d568bcb89bc4ba8ff1c2302d5e3e387004259d41cf326be514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2525564dbb419d568bcb89bc4ba8ff1c2302d5e3e387004259d41cf326be514->enter($__internal_a2525564dbb419d568bcb89bc4ba8ff1c2302d5e3e387004259d41cf326be514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8321e5afe84c0f21e9ecc1827af7f0af5350eb50bed636e71b383d2c7619eec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8321e5afe84c0f21e9ecc1827af7f0af5350eb50bed636e71b383d2c7619eec7->enter($__internal_8321e5afe84c0f21e9ecc1827af7f0af5350eb50bed636e71b383d2c7619eec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8321e5afe84c0f21e9ecc1827af7f0af5350eb50bed636e71b383d2c7619eec7->leave($__internal_8321e5afe84c0f21e9ecc1827af7f0af5350eb50bed636e71b383d2c7619eec7_prof);

        
        $__internal_a2525564dbb419d568bcb89bc4ba8ff1c2302d5e3e387004259d41cf326be514->leave($__internal_a2525564dbb419d568bcb89bc4ba8ff1c2302d5e3e387004259d41cf326be514_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd8b3f7cb8192b0cd3410af47691fd095f3422d6cb1c80c127f47e1d1cbf5e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8b3f7cb8192b0cd3410af47691fd095f3422d6cb1c80c127f47e1d1cbf5e13->enter($__internal_bd8b3f7cb8192b0cd3410af47691fd095f3422d6cb1c80c127f47e1d1cbf5e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd65bce8b1df2e2da9b056f15ac754e6b3486b71683944ebc71aead8b00e0f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd65bce8b1df2e2da9b056f15ac754e6b3486b71683944ebc71aead8b00e0f32->enter($__internal_cd65bce8b1df2e2da9b056f15ac754e6b3486b71683944ebc71aead8b00e0f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd65bce8b1df2e2da9b056f15ac754e6b3486b71683944ebc71aead8b00e0f32->leave($__internal_cd65bce8b1df2e2da9b056f15ac754e6b3486b71683944ebc71aead8b00e0f32_prof);

        
        $__internal_bd8b3f7cb8192b0cd3410af47691fd095f3422d6cb1c80c127f47e1d1cbf5e13->leave($__internal_bd8b3f7cb8192b0cd3410af47691fd095f3422d6cb1c80c127f47e1d1cbf5e13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
