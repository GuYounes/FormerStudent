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
        $__internal_8ceb1ba158b3d8b1fc702f6aa1344e4eb58a0076b0da761bcf8af3859114493f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ceb1ba158b3d8b1fc702f6aa1344e4eb58a0076b0da761bcf8af3859114493f->enter($__internal_8ceb1ba158b3d8b1fc702f6aa1344e4eb58a0076b0da761bcf8af3859114493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8ab7e3560483086b3417cdf99b8a5d0e65217043c2023e1cfa99b41dfc60c078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab7e3560483086b3417cdf99b8a5d0e65217043c2023e1cfa99b41dfc60c078->enter($__internal_8ab7e3560483086b3417cdf99b8a5d0e65217043c2023e1cfa99b41dfc60c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8ceb1ba158b3d8b1fc702f6aa1344e4eb58a0076b0da761bcf8af3859114493f->leave($__internal_8ceb1ba158b3d8b1fc702f6aa1344e4eb58a0076b0da761bcf8af3859114493f_prof);

        
        $__internal_8ab7e3560483086b3417cdf99b8a5d0e65217043c2023e1cfa99b41dfc60c078->leave($__internal_8ab7e3560483086b3417cdf99b8a5d0e65217043c2023e1cfa99b41dfc60c078_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c218dc2574c64c3da3ff20781be54e12c512fd28e8e21ca3e5c2b0f80061faff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c218dc2574c64c3da3ff20781be54e12c512fd28e8e21ca3e5c2b0f80061faff->enter($__internal_c218dc2574c64c3da3ff20781be54e12c512fd28e8e21ca3e5c2b0f80061faff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d97501289937dce6ddd0b6a5f100363f12b871163a249defbc1a023470059d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d97501289937dce6ddd0b6a5f100363f12b871163a249defbc1a023470059d0->enter($__internal_3d97501289937dce6ddd0b6a5f100363f12b871163a249defbc1a023470059d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d97501289937dce6ddd0b6a5f100363f12b871163a249defbc1a023470059d0->leave($__internal_3d97501289937dce6ddd0b6a5f100363f12b871163a249defbc1a023470059d0_prof);

        
        $__internal_c218dc2574c64c3da3ff20781be54e12c512fd28e8e21ca3e5c2b0f80061faff->leave($__internal_c218dc2574c64c3da3ff20781be54e12c512fd28e8e21ca3e5c2b0f80061faff_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_74ebd55c6f835ad14b35f6c9930dba447eb0ab1780dae7146179f080b84bd40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ebd55c6f835ad14b35f6c9930dba447eb0ab1780dae7146179f080b84bd40e->enter($__internal_74ebd55c6f835ad14b35f6c9930dba447eb0ab1780dae7146179f080b84bd40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f422f342c88aa254f19f57e28ab26dd78aa77f7dd2507d28328222449195f045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f422f342c88aa254f19f57e28ab26dd78aa77f7dd2507d28328222449195f045->enter($__internal_f422f342c88aa254f19f57e28ab26dd78aa77f7dd2507d28328222449195f045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f422f342c88aa254f19f57e28ab26dd78aa77f7dd2507d28328222449195f045->leave($__internal_f422f342c88aa254f19f57e28ab26dd78aa77f7dd2507d28328222449195f045_prof);

        
        $__internal_74ebd55c6f835ad14b35f6c9930dba447eb0ab1780dae7146179f080b84bd40e->leave($__internal_74ebd55c6f835ad14b35f6c9930dba447eb0ab1780dae7146179f080b84bd40e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_74667313c1009003459fde623f3fc0ae28430c9f96ba7dac3d617f8651d445a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74667313c1009003459fde623f3fc0ae28430c9f96ba7dac3d617f8651d445a5->enter($__internal_74667313c1009003459fde623f3fc0ae28430c9f96ba7dac3d617f8651d445a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_984526d1dfbd7797056a44acb25ce64bf919526acd4721415b25075984cc5d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984526d1dfbd7797056a44acb25ce64bf919526acd4721415b25075984cc5d91->enter($__internal_984526d1dfbd7797056a44acb25ce64bf919526acd4721415b25075984cc5d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_984526d1dfbd7797056a44acb25ce64bf919526acd4721415b25075984cc5d91->leave($__internal_984526d1dfbd7797056a44acb25ce64bf919526acd4721415b25075984cc5d91_prof);

        
        $__internal_74667313c1009003459fde623f3fc0ae28430c9f96ba7dac3d617f8651d445a5->leave($__internal_74667313c1009003459fde623f3fc0ae28430c9f96ba7dac3d617f8651d445a5_prof);

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
