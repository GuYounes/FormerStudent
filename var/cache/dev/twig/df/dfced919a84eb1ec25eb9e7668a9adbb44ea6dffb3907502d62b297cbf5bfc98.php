<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5ad46202409b5bd01efcdb68cd2005a85ccdc0e3aac7e2d1e93b0d4de11a33a4 extends Twig_Template
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
        $__internal_5f42199db0d8b78f2bb92b9ac8b4a9a14d67755120905206b74d2ac27e92f03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f42199db0d8b78f2bb92b9ac8b4a9a14d67755120905206b74d2ac27e92f03d->enter($__internal_5f42199db0d8b78f2bb92b9ac8b4a9a14d67755120905206b74d2ac27e92f03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1b6a58bbb25e5cfa81f8db489f78ebd04e1a8c4089c234fa57e5637580da693c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6a58bbb25e5cfa81f8db489f78ebd04e1a8c4089c234fa57e5637580da693c->enter($__internal_1b6a58bbb25e5cfa81f8db489f78ebd04e1a8c4089c234fa57e5637580da693c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5f42199db0d8b78f2bb92b9ac8b4a9a14d67755120905206b74d2ac27e92f03d->leave($__internal_5f42199db0d8b78f2bb92b9ac8b4a9a14d67755120905206b74d2ac27e92f03d_prof);

        
        $__internal_1b6a58bbb25e5cfa81f8db489f78ebd04e1a8c4089c234fa57e5637580da693c->leave($__internal_1b6a58bbb25e5cfa81f8db489f78ebd04e1a8c4089c234fa57e5637580da693c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4454b40e71c4b6c5e7db1c0017bbc7164904614a0a24dbfbdca17d8faa6dff11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4454b40e71c4b6c5e7db1c0017bbc7164904614a0a24dbfbdca17d8faa6dff11->enter($__internal_4454b40e71c4b6c5e7db1c0017bbc7164904614a0a24dbfbdca17d8faa6dff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53c1605885651d7f0dbc8979f3708ca2fb00138a4d10344136f6f4056798803a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c1605885651d7f0dbc8979f3708ca2fb00138a4d10344136f6f4056798803a->enter($__internal_53c1605885651d7f0dbc8979f3708ca2fb00138a4d10344136f6f4056798803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_53c1605885651d7f0dbc8979f3708ca2fb00138a4d10344136f6f4056798803a->leave($__internal_53c1605885651d7f0dbc8979f3708ca2fb00138a4d10344136f6f4056798803a_prof);

        
        $__internal_4454b40e71c4b6c5e7db1c0017bbc7164904614a0a24dbfbdca17d8faa6dff11->leave($__internal_4454b40e71c4b6c5e7db1c0017bbc7164904614a0a24dbfbdca17d8faa6dff11_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d49068f3434906bf271f17f2e812eb08a3b84e82c4a9e15c6be1c2939f224b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49068f3434906bf271f17f2e812eb08a3b84e82c4a9e15c6be1c2939f224b22->enter($__internal_d49068f3434906bf271f17f2e812eb08a3b84e82c4a9e15c6be1c2939f224b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91fd850325812d327fd79db603acaeeb6a0f242cb152fab3bb0c4cfb29d7b146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fd850325812d327fd79db603acaeeb6a0f242cb152fab3bb0c4cfb29d7b146->enter($__internal_91fd850325812d327fd79db603acaeeb6a0f242cb152fab3bb0c4cfb29d7b146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_91fd850325812d327fd79db603acaeeb6a0f242cb152fab3bb0c4cfb29d7b146->leave($__internal_91fd850325812d327fd79db603acaeeb6a0f242cb152fab3bb0c4cfb29d7b146_prof);

        
        $__internal_d49068f3434906bf271f17f2e812eb08a3b84e82c4a9e15c6be1c2939f224b22->leave($__internal_d49068f3434906bf271f17f2e812eb08a3b84e82c4a9e15c6be1c2939f224b22_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_03d5749f7b8cd71571170398e5116ff223af4b1171ab74d20717e9bf73d0abb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d5749f7b8cd71571170398e5116ff223af4b1171ab74d20717e9bf73d0abb2->enter($__internal_03d5749f7b8cd71571170398e5116ff223af4b1171ab74d20717e9bf73d0abb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c3c31e449935e2cfe7ac7fcdfa790eb7bcce21d44f6d6678e17bab4279a3c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3c31e449935e2cfe7ac7fcdfa790eb7bcce21d44f6d6678e17bab4279a3c9e->enter($__internal_3c3c31e449935e2cfe7ac7fcdfa790eb7bcce21d44f6d6678e17bab4279a3c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c3c31e449935e2cfe7ac7fcdfa790eb7bcce21d44f6d6678e17bab4279a3c9e->leave($__internal_3c3c31e449935e2cfe7ac7fcdfa790eb7bcce21d44f6d6678e17bab4279a3c9e_prof);

        
        $__internal_03d5749f7b8cd71571170398e5116ff223af4b1171ab74d20717e9bf73d0abb2->leave($__internal_03d5749f7b8cd71571170398e5116ff223af4b1171ab74d20717e9bf73d0abb2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
