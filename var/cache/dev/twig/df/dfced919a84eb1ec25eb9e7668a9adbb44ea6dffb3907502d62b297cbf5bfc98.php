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
        $__internal_5a8ef1e1bbabf08ac6d3a6862c67ed34d3a9cf127d543a677d93558669ef5281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8ef1e1bbabf08ac6d3a6862c67ed34d3a9cf127d543a677d93558669ef5281->enter($__internal_5a8ef1e1bbabf08ac6d3a6862c67ed34d3a9cf127d543a677d93558669ef5281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_01de6f7299f6c43d07005aa6c8574653c4019d70e946f7de8d43b0b1f4f71879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01de6f7299f6c43d07005aa6c8574653c4019d70e946f7de8d43b0b1f4f71879->enter($__internal_01de6f7299f6c43d07005aa6c8574653c4019d70e946f7de8d43b0b1f4f71879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5a8ef1e1bbabf08ac6d3a6862c67ed34d3a9cf127d543a677d93558669ef5281->leave($__internal_5a8ef1e1bbabf08ac6d3a6862c67ed34d3a9cf127d543a677d93558669ef5281_prof);

        
        $__internal_01de6f7299f6c43d07005aa6c8574653c4019d70e946f7de8d43b0b1f4f71879->leave($__internal_01de6f7299f6c43d07005aa6c8574653c4019d70e946f7de8d43b0b1f4f71879_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a529898226d7f8257e4f94e21ee57709a39b4d5c6e3b5252befa397aa34e4a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a529898226d7f8257e4f94e21ee57709a39b4d5c6e3b5252befa397aa34e4a6f->enter($__internal_a529898226d7f8257e4f94e21ee57709a39b4d5c6e3b5252befa397aa34e4a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dce1cd642b94fe0a4bb30ae89525d4eff705856d766f98bacc14a52a588b253c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce1cd642b94fe0a4bb30ae89525d4eff705856d766f98bacc14a52a588b253c->enter($__internal_dce1cd642b94fe0a4bb30ae89525d4eff705856d766f98bacc14a52a588b253c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dce1cd642b94fe0a4bb30ae89525d4eff705856d766f98bacc14a52a588b253c->leave($__internal_dce1cd642b94fe0a4bb30ae89525d4eff705856d766f98bacc14a52a588b253c_prof);

        
        $__internal_a529898226d7f8257e4f94e21ee57709a39b4d5c6e3b5252befa397aa34e4a6f->leave($__internal_a529898226d7f8257e4f94e21ee57709a39b4d5c6e3b5252befa397aa34e4a6f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9b30901721b1e677c8ba07ba4293e0c1b27fea71cda2fb7877becb2f069813a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b30901721b1e677c8ba07ba4293e0c1b27fea71cda2fb7877becb2f069813a->enter($__internal_c9b30901721b1e677c8ba07ba4293e0c1b27fea71cda2fb7877becb2f069813a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86bba71615883d6d9ca5e78bfb3f99716d2a36eb742931e1f3285557ba48a035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86bba71615883d6d9ca5e78bfb3f99716d2a36eb742931e1f3285557ba48a035->enter($__internal_86bba71615883d6d9ca5e78bfb3f99716d2a36eb742931e1f3285557ba48a035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_86bba71615883d6d9ca5e78bfb3f99716d2a36eb742931e1f3285557ba48a035->leave($__internal_86bba71615883d6d9ca5e78bfb3f99716d2a36eb742931e1f3285557ba48a035_prof);

        
        $__internal_c9b30901721b1e677c8ba07ba4293e0c1b27fea71cda2fb7877becb2f069813a->leave($__internal_c9b30901721b1e677c8ba07ba4293e0c1b27fea71cda2fb7877becb2f069813a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_203ae115cab9f510a83cb1f19316b2e243ce85f86c756842e5e6bb8e20f33269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203ae115cab9f510a83cb1f19316b2e243ce85f86c756842e5e6bb8e20f33269->enter($__internal_203ae115cab9f510a83cb1f19316b2e243ce85f86c756842e5e6bb8e20f33269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e1ff311b4bfdc74b1479d1ca9950d0e61cd81b784f8a0f67109510fbbd066df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1ff311b4bfdc74b1479d1ca9950d0e61cd81b784f8a0f67109510fbbd066df->enter($__internal_8e1ff311b4bfdc74b1479d1ca9950d0e61cd81b784f8a0f67109510fbbd066df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e1ff311b4bfdc74b1479d1ca9950d0e61cd81b784f8a0f67109510fbbd066df->leave($__internal_8e1ff311b4bfdc74b1479d1ca9950d0e61cd81b784f8a0f67109510fbbd066df_prof);

        
        $__internal_203ae115cab9f510a83cb1f19316b2e243ce85f86c756842e5e6bb8e20f33269->leave($__internal_203ae115cab9f510a83cb1f19316b2e243ce85f86c756842e5e6bb8e20f33269_prof);

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
