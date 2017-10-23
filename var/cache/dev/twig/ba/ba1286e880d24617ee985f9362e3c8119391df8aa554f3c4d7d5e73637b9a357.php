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
        $__internal_9ea1e595c7144d95f422dd6b8cb26838ddb6f548ecbe39ee6f7527808e22c95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea1e595c7144d95f422dd6b8cb26838ddb6f548ecbe39ee6f7527808e22c95b->enter($__internal_9ea1e595c7144d95f422dd6b8cb26838ddb6f548ecbe39ee6f7527808e22c95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_72f29bcf12d09036103660a58ef664c577458e100d6ac3a2a7b3355eca7e6a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f29bcf12d09036103660a58ef664c577458e100d6ac3a2a7b3355eca7e6a33->enter($__internal_72f29bcf12d09036103660a58ef664c577458e100d6ac3a2a7b3355eca7e6a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_9ea1e595c7144d95f422dd6b8cb26838ddb6f548ecbe39ee6f7527808e22c95b->leave($__internal_9ea1e595c7144d95f422dd6b8cb26838ddb6f548ecbe39ee6f7527808e22c95b_prof);

        
        $__internal_72f29bcf12d09036103660a58ef664c577458e100d6ac3a2a7b3355eca7e6a33->leave($__internal_72f29bcf12d09036103660a58ef664c577458e100d6ac3a2a7b3355eca7e6a33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35fbc520a09f163b7d5eee33edc4c437684dfd9fa3a7711f36febe6bca36f43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fbc520a09f163b7d5eee33edc4c437684dfd9fa3a7711f36febe6bca36f43f->enter($__internal_35fbc520a09f163b7d5eee33edc4c437684dfd9fa3a7711f36febe6bca36f43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e68715aed5b47a849ce062deddcd800abbcdb3f37d11c85b838f3638c1cd969b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68715aed5b47a849ce062deddcd800abbcdb3f37d11c85b838f3638c1cd969b->enter($__internal_e68715aed5b47a849ce062deddcd800abbcdb3f37d11c85b838f3638c1cd969b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e68715aed5b47a849ce062deddcd800abbcdb3f37d11c85b838f3638c1cd969b->leave($__internal_e68715aed5b47a849ce062deddcd800abbcdb3f37d11c85b838f3638c1cd969b_prof);

        
        $__internal_35fbc520a09f163b7d5eee33edc4c437684dfd9fa3a7711f36febe6bca36f43f->leave($__internal_35fbc520a09f163b7d5eee33edc4c437684dfd9fa3a7711f36febe6bca36f43f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9d6e3181666fc299ef74eaa3992c499a3340420d3f4a94e0c1b4bdeca04fe89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d6e3181666fc299ef74eaa3992c499a3340420d3f4a94e0c1b4bdeca04fe89->enter($__internal_a9d6e3181666fc299ef74eaa3992c499a3340420d3f4a94e0c1b4bdeca04fe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ff0eeb935af6178cd3a17a41ba42d2e063916a9110b6da6680b1a7176141114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff0eeb935af6178cd3a17a41ba42d2e063916a9110b6da6680b1a7176141114->enter($__internal_4ff0eeb935af6178cd3a17a41ba42d2e063916a9110b6da6680b1a7176141114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4ff0eeb935af6178cd3a17a41ba42d2e063916a9110b6da6680b1a7176141114->leave($__internal_4ff0eeb935af6178cd3a17a41ba42d2e063916a9110b6da6680b1a7176141114_prof);

        
        $__internal_a9d6e3181666fc299ef74eaa3992c499a3340420d3f4a94e0c1b4bdeca04fe89->leave($__internal_a9d6e3181666fc299ef74eaa3992c499a3340420d3f4a94e0c1b4bdeca04fe89_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b141969673e3deae91dae3eab10231c7c82fab72e56fbb87cd5d786b2dc954b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b141969673e3deae91dae3eab10231c7c82fab72e56fbb87cd5d786b2dc954b9->enter($__internal_b141969673e3deae91dae3eab10231c7c82fab72e56fbb87cd5d786b2dc954b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e27622fba0c01b95606b37d9f1a2753cd88faf1e7d69f358566fc896d451bfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27622fba0c01b95606b37d9f1a2753cd88faf1e7d69f358566fc896d451bfd4->enter($__internal_e27622fba0c01b95606b37d9f1a2753cd88faf1e7d69f358566fc896d451bfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e27622fba0c01b95606b37d9f1a2753cd88faf1e7d69f358566fc896d451bfd4->leave($__internal_e27622fba0c01b95606b37d9f1a2753cd88faf1e7d69f358566fc896d451bfd4_prof);

        
        $__internal_b141969673e3deae91dae3eab10231c7c82fab72e56fbb87cd5d786b2dc954b9->leave($__internal_b141969673e3deae91dae3eab10231c7c82fab72e56fbb87cd5d786b2dc954b9_prof);

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
