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
        $__internal_b737050a96ed45116a7c3c0631a489f792bfd733566189c32baf7b6e04a1fc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b737050a96ed45116a7c3c0631a489f792bfd733566189c32baf7b6e04a1fc67->enter($__internal_b737050a96ed45116a7c3c0631a489f792bfd733566189c32baf7b6e04a1fc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_644201a38e1808a6a7905453a897edc9045ad737ad0e5414c2e54a1b96f04885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644201a38e1808a6a7905453a897edc9045ad737ad0e5414c2e54a1b96f04885->enter($__internal_644201a38e1808a6a7905453a897edc9045ad737ad0e5414c2e54a1b96f04885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b737050a96ed45116a7c3c0631a489f792bfd733566189c32baf7b6e04a1fc67->leave($__internal_b737050a96ed45116a7c3c0631a489f792bfd733566189c32baf7b6e04a1fc67_prof);

        
        $__internal_644201a38e1808a6a7905453a897edc9045ad737ad0e5414c2e54a1b96f04885->leave($__internal_644201a38e1808a6a7905453a897edc9045ad737ad0e5414c2e54a1b96f04885_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e7ae32f0da24f8c187e8246e644479b5182a6189c90e235fb7c5774ea7d5609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7ae32f0da24f8c187e8246e644479b5182a6189c90e235fb7c5774ea7d5609->enter($__internal_9e7ae32f0da24f8c187e8246e644479b5182a6189c90e235fb7c5774ea7d5609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63ddb087b0acc032b71009fb150777d7572cd4be3c5438eb3b1bcad0c37961c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ddb087b0acc032b71009fb150777d7572cd4be3c5438eb3b1bcad0c37961c5->enter($__internal_63ddb087b0acc032b71009fb150777d7572cd4be3c5438eb3b1bcad0c37961c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_63ddb087b0acc032b71009fb150777d7572cd4be3c5438eb3b1bcad0c37961c5->leave($__internal_63ddb087b0acc032b71009fb150777d7572cd4be3c5438eb3b1bcad0c37961c5_prof);

        
        $__internal_9e7ae32f0da24f8c187e8246e644479b5182a6189c90e235fb7c5774ea7d5609->leave($__internal_9e7ae32f0da24f8c187e8246e644479b5182a6189c90e235fb7c5774ea7d5609_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_181e8e2cd8a8f9c075447895fd339d0aa14667a87381d378de81d85b232d814f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181e8e2cd8a8f9c075447895fd339d0aa14667a87381d378de81d85b232d814f->enter($__internal_181e8e2cd8a8f9c075447895fd339d0aa14667a87381d378de81d85b232d814f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e8ea692b1953f3acb8cf18d02dd4846cec0a0ea858817c0b8f9ede8c228e7077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ea692b1953f3acb8cf18d02dd4846cec0a0ea858817c0b8f9ede8c228e7077->enter($__internal_e8ea692b1953f3acb8cf18d02dd4846cec0a0ea858817c0b8f9ede8c228e7077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e8ea692b1953f3acb8cf18d02dd4846cec0a0ea858817c0b8f9ede8c228e7077->leave($__internal_e8ea692b1953f3acb8cf18d02dd4846cec0a0ea858817c0b8f9ede8c228e7077_prof);

        
        $__internal_181e8e2cd8a8f9c075447895fd339d0aa14667a87381d378de81d85b232d814f->leave($__internal_181e8e2cd8a8f9c075447895fd339d0aa14667a87381d378de81d85b232d814f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1512a379f760bf4a16d9b15e4855db7ce8162da0b3105460a94fdc90be5fbeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1512a379f760bf4a16d9b15e4855db7ce8162da0b3105460a94fdc90be5fbeee->enter($__internal_1512a379f760bf4a16d9b15e4855db7ce8162da0b3105460a94fdc90be5fbeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb4df85180bc82337b3fa90873957ccdc80e6344bee554bb1624fb9cdc8c3b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4df85180bc82337b3fa90873957ccdc80e6344bee554bb1624fb9cdc8c3b92->enter($__internal_eb4df85180bc82337b3fa90873957ccdc80e6344bee554bb1624fb9cdc8c3b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb4df85180bc82337b3fa90873957ccdc80e6344bee554bb1624fb9cdc8c3b92->leave($__internal_eb4df85180bc82337b3fa90873957ccdc80e6344bee554bb1624fb9cdc8c3b92_prof);

        
        $__internal_1512a379f760bf4a16d9b15e4855db7ce8162da0b3105460a94fdc90be5fbeee->leave($__internal_1512a379f760bf4a16d9b15e4855db7ce8162da0b3105460a94fdc90be5fbeee_prof);

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
