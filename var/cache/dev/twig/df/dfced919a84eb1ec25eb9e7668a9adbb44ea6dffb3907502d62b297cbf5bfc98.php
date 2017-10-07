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
        $__internal_df1928bbbdaa3c04da432d83a32f34c71e2e50a43af35c714c5ce59194d7008d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1928bbbdaa3c04da432d83a32f34c71e2e50a43af35c714c5ce59194d7008d->enter($__internal_df1928bbbdaa3c04da432d83a32f34c71e2e50a43af35c714c5ce59194d7008d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f98e7c0176d3d6cab4713d9a2f538a8d95bd6802ef10576b0d2aa24e0c60a22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98e7c0176d3d6cab4713d9a2f538a8d95bd6802ef10576b0d2aa24e0c60a22a->enter($__internal_f98e7c0176d3d6cab4713d9a2f538a8d95bd6802ef10576b0d2aa24e0c60a22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_df1928bbbdaa3c04da432d83a32f34c71e2e50a43af35c714c5ce59194d7008d->leave($__internal_df1928bbbdaa3c04da432d83a32f34c71e2e50a43af35c714c5ce59194d7008d_prof);

        
        $__internal_f98e7c0176d3d6cab4713d9a2f538a8d95bd6802ef10576b0d2aa24e0c60a22a->leave($__internal_f98e7c0176d3d6cab4713d9a2f538a8d95bd6802ef10576b0d2aa24e0c60a22a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_600386618873f84b00d41a5c918a6764efcd39ea7b03de2c4226eeabc07c40bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600386618873f84b00d41a5c918a6764efcd39ea7b03de2c4226eeabc07c40bd->enter($__internal_600386618873f84b00d41a5c918a6764efcd39ea7b03de2c4226eeabc07c40bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af7190ab277e5e11b31e1b3934570286be21c9ff8c189b209dd901d02c50fa8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7190ab277e5e11b31e1b3934570286be21c9ff8c189b209dd901d02c50fa8f->enter($__internal_af7190ab277e5e11b31e1b3934570286be21c9ff8c189b209dd901d02c50fa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_af7190ab277e5e11b31e1b3934570286be21c9ff8c189b209dd901d02c50fa8f->leave($__internal_af7190ab277e5e11b31e1b3934570286be21c9ff8c189b209dd901d02c50fa8f_prof);

        
        $__internal_600386618873f84b00d41a5c918a6764efcd39ea7b03de2c4226eeabc07c40bd->leave($__internal_600386618873f84b00d41a5c918a6764efcd39ea7b03de2c4226eeabc07c40bd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ab6856b657bd84a054af32760d4fd96071b03dc5e88098c6b9b73b022cc3dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab6856b657bd84a054af32760d4fd96071b03dc5e88098c6b9b73b022cc3dd1->enter($__internal_1ab6856b657bd84a054af32760d4fd96071b03dc5e88098c6b9b73b022cc3dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d930ea820c6841e046b3322661f11820ca4dcc3d6e9a0cc66a9a5f94b8b54a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d930ea820c6841e046b3322661f11820ca4dcc3d6e9a0cc66a9a5f94b8b54a9->enter($__internal_1d930ea820c6841e046b3322661f11820ca4dcc3d6e9a0cc66a9a5f94b8b54a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1d930ea820c6841e046b3322661f11820ca4dcc3d6e9a0cc66a9a5f94b8b54a9->leave($__internal_1d930ea820c6841e046b3322661f11820ca4dcc3d6e9a0cc66a9a5f94b8b54a9_prof);

        
        $__internal_1ab6856b657bd84a054af32760d4fd96071b03dc5e88098c6b9b73b022cc3dd1->leave($__internal_1ab6856b657bd84a054af32760d4fd96071b03dc5e88098c6b9b73b022cc3dd1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5c5ea60c0ffa24ae40fce94763f20b3bd1f669df10e4ebdbbf6fc484b2adefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c5ea60c0ffa24ae40fce94763f20b3bd1f669df10e4ebdbbf6fc484b2adefc->enter($__internal_b5c5ea60c0ffa24ae40fce94763f20b3bd1f669df10e4ebdbbf6fc484b2adefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13e462e9273a683bcf099db1117b9ee635b426c5d5f107bea5854c8dd3cb3d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e462e9273a683bcf099db1117b9ee635b426c5d5f107bea5854c8dd3cb3d1a->enter($__internal_13e462e9273a683bcf099db1117b9ee635b426c5d5f107bea5854c8dd3cb3d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13e462e9273a683bcf099db1117b9ee635b426c5d5f107bea5854c8dd3cb3d1a->leave($__internal_13e462e9273a683bcf099db1117b9ee635b426c5d5f107bea5854c8dd3cb3d1a_prof);

        
        $__internal_b5c5ea60c0ffa24ae40fce94763f20b3bd1f669df10e4ebdbbf6fc484b2adefc->leave($__internal_b5c5ea60c0ffa24ae40fce94763f20b3bd1f669df10e4ebdbbf6fc484b2adefc_prof);

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
