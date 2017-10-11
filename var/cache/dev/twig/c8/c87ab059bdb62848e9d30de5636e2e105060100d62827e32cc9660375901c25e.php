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
        $__internal_f0b7c74674024b3eef473bffb2f866fef8a92e6a1726686713e57e4edcc1521d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b7c74674024b3eef473bffb2f866fef8a92e6a1726686713e57e4edcc1521d->enter($__internal_f0b7c74674024b3eef473bffb2f866fef8a92e6a1726686713e57e4edcc1521d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_fce2725b9e3fbcddb31fd996d806ab509698b7faee2df03fd60e992f52fb2a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce2725b9e3fbcddb31fd996d806ab509698b7faee2df03fd60e992f52fb2a85->enter($__internal_fce2725b9e3fbcddb31fd996d806ab509698b7faee2df03fd60e992f52fb2a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_f0b7c74674024b3eef473bffb2f866fef8a92e6a1726686713e57e4edcc1521d->leave($__internal_f0b7c74674024b3eef473bffb2f866fef8a92e6a1726686713e57e4edcc1521d_prof);

        
        $__internal_fce2725b9e3fbcddb31fd996d806ab509698b7faee2df03fd60e992f52fb2a85->leave($__internal_fce2725b9e3fbcddb31fd996d806ab509698b7faee2df03fd60e992f52fb2a85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_193fa29c5e9346fb2e4a4b46a9a32b8875a50d86241d8b22fd9f84e3e4cc75f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193fa29c5e9346fb2e4a4b46a9a32b8875a50d86241d8b22fd9f84e3e4cc75f2->enter($__internal_193fa29c5e9346fb2e4a4b46a9a32b8875a50d86241d8b22fd9f84e3e4cc75f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bf99b6c55148ce234d1b39b2fad8632ffc90c017f8a3f9259a4378feb8693bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf99b6c55148ce234d1b39b2fad8632ffc90c017f8a3f9259a4378feb8693bb->enter($__internal_6bf99b6c55148ce234d1b39b2fad8632ffc90c017f8a3f9259a4378feb8693bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6bf99b6c55148ce234d1b39b2fad8632ffc90c017f8a3f9259a4378feb8693bb->leave($__internal_6bf99b6c55148ce234d1b39b2fad8632ffc90c017f8a3f9259a4378feb8693bb_prof);

        
        $__internal_193fa29c5e9346fb2e4a4b46a9a32b8875a50d86241d8b22fd9f84e3e4cc75f2->leave($__internal_193fa29c5e9346fb2e4a4b46a9a32b8875a50d86241d8b22fd9f84e3e4cc75f2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cfe768e7592bb7de5d9529d1313a03b9906a7977d28d20b31c8986cae41f2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfe768e7592bb7de5d9529d1313a03b9906a7977d28d20b31c8986cae41f2cd->enter($__internal_5cfe768e7592bb7de5d9529d1313a03b9906a7977d28d20b31c8986cae41f2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7faad9833ce026ae08caaeed9b860be9e101188218c5992aa50417684b037f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7faad9833ce026ae08caaeed9b860be9e101188218c5992aa50417684b037f3f->enter($__internal_7faad9833ce026ae08caaeed9b860be9e101188218c5992aa50417684b037f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7faad9833ce026ae08caaeed9b860be9e101188218c5992aa50417684b037f3f->leave($__internal_7faad9833ce026ae08caaeed9b860be9e101188218c5992aa50417684b037f3f_prof);

        
        $__internal_5cfe768e7592bb7de5d9529d1313a03b9906a7977d28d20b31c8986cae41f2cd->leave($__internal_5cfe768e7592bb7de5d9529d1313a03b9906a7977d28d20b31c8986cae41f2cd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac9d03878cc6ed940093da0d3929203e129a97fd7a591ff3ab86007afab4e81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9d03878cc6ed940093da0d3929203e129a97fd7a591ff3ab86007afab4e81f->enter($__internal_ac9d03878cc6ed940093da0d3929203e129a97fd7a591ff3ab86007afab4e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae0778aaed3ef327f5a2237da2dbc91bc4f4d65c13da6866e1d0f0b4e57a4742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0778aaed3ef327f5a2237da2dbc91bc4f4d65c13da6866e1d0f0b4e57a4742->enter($__internal_ae0778aaed3ef327f5a2237da2dbc91bc4f4d65c13da6866e1d0f0b4e57a4742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae0778aaed3ef327f5a2237da2dbc91bc4f4d65c13da6866e1d0f0b4e57a4742->leave($__internal_ae0778aaed3ef327f5a2237da2dbc91bc4f4d65c13da6866e1d0f0b4e57a4742_prof);

        
        $__internal_ac9d03878cc6ed940093da0d3929203e129a97fd7a591ff3ab86007afab4e81f->leave($__internal_ac9d03878cc6ed940093da0d3929203e129a97fd7a591ff3ab86007afab4e81f_prof);

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
