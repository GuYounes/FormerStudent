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
        $__internal_c671bbdf54971f38869c65bea686bbec3e6e954c3ce3aec48b4e569e5093efc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c671bbdf54971f38869c65bea686bbec3e6e954c3ce3aec48b4e569e5093efc2->enter($__internal_c671bbdf54971f38869c65bea686bbec3e6e954c3ce3aec48b4e569e5093efc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_b6334c0fbdf818a1d15bac984f169cb3cf86dbd7932795d9d35a8026286e7bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6334c0fbdf818a1d15bac984f169cb3cf86dbd7932795d9d35a8026286e7bab->enter($__internal_b6334c0fbdf818a1d15bac984f169cb3cf86dbd7932795d9d35a8026286e7bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_c671bbdf54971f38869c65bea686bbec3e6e954c3ce3aec48b4e569e5093efc2->leave($__internal_c671bbdf54971f38869c65bea686bbec3e6e954c3ce3aec48b4e569e5093efc2_prof);

        
        $__internal_b6334c0fbdf818a1d15bac984f169cb3cf86dbd7932795d9d35a8026286e7bab->leave($__internal_b6334c0fbdf818a1d15bac984f169cb3cf86dbd7932795d9d35a8026286e7bab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fa53ef5e52356bfee3c28263dec5660d11de18aa2936798ef1569f4c87f458c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa53ef5e52356bfee3c28263dec5660d11de18aa2936798ef1569f4c87f458c->enter($__internal_7fa53ef5e52356bfee3c28263dec5660d11de18aa2936798ef1569f4c87f458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1457317b0ca35e59f7acc30a58cf3467d160531c0d01d1467f8077694b31bd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1457317b0ca35e59f7acc30a58cf3467d160531c0d01d1467f8077694b31bd08->enter($__internal_1457317b0ca35e59f7acc30a58cf3467d160531c0d01d1467f8077694b31bd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1457317b0ca35e59f7acc30a58cf3467d160531c0d01d1467f8077694b31bd08->leave($__internal_1457317b0ca35e59f7acc30a58cf3467d160531c0d01d1467f8077694b31bd08_prof);

        
        $__internal_7fa53ef5e52356bfee3c28263dec5660d11de18aa2936798ef1569f4c87f458c->leave($__internal_7fa53ef5e52356bfee3c28263dec5660d11de18aa2936798ef1569f4c87f458c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_159ddeaa6001869bbe983fa0a444101dbcdab31fd4d107139a9fd651e597dc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159ddeaa6001869bbe983fa0a444101dbcdab31fd4d107139a9fd651e597dc57->enter($__internal_159ddeaa6001869bbe983fa0a444101dbcdab31fd4d107139a9fd651e597dc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89b870219fbf55d208fe67c2ec8120c7af02bfed0ac25a0c7945e0ab13cf7efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b870219fbf55d208fe67c2ec8120c7af02bfed0ac25a0c7945e0ab13cf7efc->enter($__internal_89b870219fbf55d208fe67c2ec8120c7af02bfed0ac25a0c7945e0ab13cf7efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_89b870219fbf55d208fe67c2ec8120c7af02bfed0ac25a0c7945e0ab13cf7efc->leave($__internal_89b870219fbf55d208fe67c2ec8120c7af02bfed0ac25a0c7945e0ab13cf7efc_prof);

        
        $__internal_159ddeaa6001869bbe983fa0a444101dbcdab31fd4d107139a9fd651e597dc57->leave($__internal_159ddeaa6001869bbe983fa0a444101dbcdab31fd4d107139a9fd651e597dc57_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_332035d38a49064f3ed8e9483eb94331818f81eba4bc3bad7829b4db885f8d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332035d38a49064f3ed8e9483eb94331818f81eba4bc3bad7829b4db885f8d58->enter($__internal_332035d38a49064f3ed8e9483eb94331818f81eba4bc3bad7829b4db885f8d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b0468b00e2ed3b0d2abacd625d452078e71346b55313775446150d7926e0fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0468b00e2ed3b0d2abacd625d452078e71346b55313775446150d7926e0fb4->enter($__internal_4b0468b00e2ed3b0d2abacd625d452078e71346b55313775446150d7926e0fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b0468b00e2ed3b0d2abacd625d452078e71346b55313775446150d7926e0fb4->leave($__internal_4b0468b00e2ed3b0d2abacd625d452078e71346b55313775446150d7926e0fb4_prof);

        
        $__internal_332035d38a49064f3ed8e9483eb94331818f81eba4bc3bad7829b4db885f8d58->leave($__internal_332035d38a49064f3ed8e9483eb94331818f81eba4bc3bad7829b4db885f8d58_prof);

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
