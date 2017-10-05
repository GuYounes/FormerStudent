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
        $__internal_4d7a2557d5ef32c2039860ab63e3ab339d322e47d051fe6bde142a0d0a6cfa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7a2557d5ef32c2039860ab63e3ab339d322e47d051fe6bde142a0d0a6cfa09->enter($__internal_4d7a2557d5ef32c2039860ab63e3ab339d322e47d051fe6bde142a0d0a6cfa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_34d6894b2853b530f6c16bbce5becf34b5b87672ea342c9b72f25ffd7e4f1dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d6894b2853b530f6c16bbce5becf34b5b87672ea342c9b72f25ffd7e4f1dc6->enter($__internal_34d6894b2853b530f6c16bbce5becf34b5b87672ea342c9b72f25ffd7e4f1dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_4d7a2557d5ef32c2039860ab63e3ab339d322e47d051fe6bde142a0d0a6cfa09->leave($__internal_4d7a2557d5ef32c2039860ab63e3ab339d322e47d051fe6bde142a0d0a6cfa09_prof);

        
        $__internal_34d6894b2853b530f6c16bbce5becf34b5b87672ea342c9b72f25ffd7e4f1dc6->leave($__internal_34d6894b2853b530f6c16bbce5becf34b5b87672ea342c9b72f25ffd7e4f1dc6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1902f2ed74595689ba37af2d959728b6ffac775c69f9541406f0622090eeb33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1902f2ed74595689ba37af2d959728b6ffac775c69f9541406f0622090eeb33f->enter($__internal_1902f2ed74595689ba37af2d959728b6ffac775c69f9541406f0622090eeb33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_545d9dd4a7a58bc9f2686e1bb1e58ebf23d1e4d791b705edfd1fcdad70ce98d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545d9dd4a7a58bc9f2686e1bb1e58ebf23d1e4d791b705edfd1fcdad70ce98d3->enter($__internal_545d9dd4a7a58bc9f2686e1bb1e58ebf23d1e4d791b705edfd1fcdad70ce98d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_545d9dd4a7a58bc9f2686e1bb1e58ebf23d1e4d791b705edfd1fcdad70ce98d3->leave($__internal_545d9dd4a7a58bc9f2686e1bb1e58ebf23d1e4d791b705edfd1fcdad70ce98d3_prof);

        
        $__internal_1902f2ed74595689ba37af2d959728b6ffac775c69f9541406f0622090eeb33f->leave($__internal_1902f2ed74595689ba37af2d959728b6ffac775c69f9541406f0622090eeb33f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1b110373de1d42706ed46f5f81e5fa7ca7cd46d750c5dbea1f9bff32ecae4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b110373de1d42706ed46f5f81e5fa7ca7cd46d750c5dbea1f9bff32ecae4b2->enter($__internal_b1b110373de1d42706ed46f5f81e5fa7ca7cd46d750c5dbea1f9bff32ecae4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_034f47a43158dfc61a72befd75f4f27d8e41bde5475e73b85fa4e5eaae269041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034f47a43158dfc61a72befd75f4f27d8e41bde5475e73b85fa4e5eaae269041->enter($__internal_034f47a43158dfc61a72befd75f4f27d8e41bde5475e73b85fa4e5eaae269041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_034f47a43158dfc61a72befd75f4f27d8e41bde5475e73b85fa4e5eaae269041->leave($__internal_034f47a43158dfc61a72befd75f4f27d8e41bde5475e73b85fa4e5eaae269041_prof);

        
        $__internal_b1b110373de1d42706ed46f5f81e5fa7ca7cd46d750c5dbea1f9bff32ecae4b2->leave($__internal_b1b110373de1d42706ed46f5f81e5fa7ca7cd46d750c5dbea1f9bff32ecae4b2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ca2e3931b3ceaa3131b2b8587d013e63768f9d037cdbfa1522e0a6597cb0176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca2e3931b3ceaa3131b2b8587d013e63768f9d037cdbfa1522e0a6597cb0176->enter($__internal_2ca2e3931b3ceaa3131b2b8587d013e63768f9d037cdbfa1522e0a6597cb0176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf567d72ae25a0c1f272378bc5d1dd7785e1e564f91a7cdf44ee9b4ab1fcf11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf567d72ae25a0c1f272378bc5d1dd7785e1e564f91a7cdf44ee9b4ab1fcf11b->enter($__internal_cf567d72ae25a0c1f272378bc5d1dd7785e1e564f91a7cdf44ee9b4ab1fcf11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf567d72ae25a0c1f272378bc5d1dd7785e1e564f91a7cdf44ee9b4ab1fcf11b->leave($__internal_cf567d72ae25a0c1f272378bc5d1dd7785e1e564f91a7cdf44ee9b4ab1fcf11b_prof);

        
        $__internal_2ca2e3931b3ceaa3131b2b8587d013e63768f9d037cdbfa1522e0a6597cb0176->leave($__internal_2ca2e3931b3ceaa3131b2b8587d013e63768f9d037cdbfa1522e0a6597cb0176_prof);

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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
