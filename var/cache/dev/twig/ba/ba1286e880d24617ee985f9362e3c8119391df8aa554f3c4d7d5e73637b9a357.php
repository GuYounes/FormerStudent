<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d3d130b7e170f8929c7a0002c7b0a93a76f9768f612dd548ca39e0274c43c91b extends Twig_Template
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
        $__internal_af2d6d653c02a80b69b03952df5aa475b38c86c1c5661f144128fd6b7001a7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2d6d653c02a80b69b03952df5aa475b38c86c1c5661f144128fd6b7001a7ea->enter($__internal_af2d6d653c02a80b69b03952df5aa475b38c86c1c5661f144128fd6b7001a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_db9cc60c09be3fa2c2d6ccf6fdeaa5d47e9a40eab6badf9c546a964c7fb22f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9cc60c09be3fa2c2d6ccf6fdeaa5d47e9a40eab6badf9c546a964c7fb22f9f->enter($__internal_db9cc60c09be3fa2c2d6ccf6fdeaa5d47e9a40eab6badf9c546a964c7fb22f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_af2d6d653c02a80b69b03952df5aa475b38c86c1c5661f144128fd6b7001a7ea->leave($__internal_af2d6d653c02a80b69b03952df5aa475b38c86c1c5661f144128fd6b7001a7ea_prof);

        
        $__internal_db9cc60c09be3fa2c2d6ccf6fdeaa5d47e9a40eab6badf9c546a964c7fb22f9f->leave($__internal_db9cc60c09be3fa2c2d6ccf6fdeaa5d47e9a40eab6badf9c546a964c7fb22f9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cd3584d9b273e927512c09124e492cc1c8a0141ab029744d4dd9536c608013f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd3584d9b273e927512c09124e492cc1c8a0141ab029744d4dd9536c608013f->enter($__internal_4cd3584d9b273e927512c09124e492cc1c8a0141ab029744d4dd9536c608013f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b0534f31bd4882b675db0da6dfdfc1b50546244b4baf402d9b9d5b99d8c44dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0534f31bd4882b675db0da6dfdfc1b50546244b4baf402d9b9d5b99d8c44dd->enter($__internal_9b0534f31bd4882b675db0da6dfdfc1b50546244b4baf402d9b9d5b99d8c44dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9b0534f31bd4882b675db0da6dfdfc1b50546244b4baf402d9b9d5b99d8c44dd->leave($__internal_9b0534f31bd4882b675db0da6dfdfc1b50546244b4baf402d9b9d5b99d8c44dd_prof);

        
        $__internal_4cd3584d9b273e927512c09124e492cc1c8a0141ab029744d4dd9536c608013f->leave($__internal_4cd3584d9b273e927512c09124e492cc1c8a0141ab029744d4dd9536c608013f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b4de903583a94090bdeb00e7e5331ba3e985d4450769bc710c4e8f212a37163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4de903583a94090bdeb00e7e5331ba3e985d4450769bc710c4e8f212a37163->enter($__internal_6b4de903583a94090bdeb00e7e5331ba3e985d4450769bc710c4e8f212a37163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3bae407f4d02e7a387dfbed573d7e2b8ff68aaca35df42e29e4776e3ffa578f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bae407f4d02e7a387dfbed573d7e2b8ff68aaca35df42e29e4776e3ffa578f3->enter($__internal_3bae407f4d02e7a387dfbed573d7e2b8ff68aaca35df42e29e4776e3ffa578f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3bae407f4d02e7a387dfbed573d7e2b8ff68aaca35df42e29e4776e3ffa578f3->leave($__internal_3bae407f4d02e7a387dfbed573d7e2b8ff68aaca35df42e29e4776e3ffa578f3_prof);

        
        $__internal_6b4de903583a94090bdeb00e7e5331ba3e985d4450769bc710c4e8f212a37163->leave($__internal_6b4de903583a94090bdeb00e7e5331ba3e985d4450769bc710c4e8f212a37163_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1af7841b3e42b35d8947469b34f8f287a45cd92384685b509d7265b884a1cade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af7841b3e42b35d8947469b34f8f287a45cd92384685b509d7265b884a1cade->enter($__internal_1af7841b3e42b35d8947469b34f8f287a45cd92384685b509d7265b884a1cade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22b0c135ff5bc7536d324951875d7c4fa5744eb849f72c640a99698d79fda793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b0c135ff5bc7536d324951875d7c4fa5744eb849f72c640a99698d79fda793->enter($__internal_22b0c135ff5bc7536d324951875d7c4fa5744eb849f72c640a99698d79fda793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22b0c135ff5bc7536d324951875d7c4fa5744eb849f72c640a99698d79fda793->leave($__internal_22b0c135ff5bc7536d324951875d7c4fa5744eb849f72c640a99698d79fda793_prof);

        
        $__internal_1af7841b3e42b35d8947469b34f8f287a45cd92384685b509d7265b884a1cade->leave($__internal_1af7841b3e42b35d8947469b34f8f287a45cd92384685b509d7265b884a1cade_prof);

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
