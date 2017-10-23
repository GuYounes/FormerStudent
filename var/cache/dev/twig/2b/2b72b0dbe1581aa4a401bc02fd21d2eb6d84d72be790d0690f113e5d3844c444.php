<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_67d76aa4ab9cfdeee31e72f2c76b7d771405e1e26961968b9bb817c47f18211c extends Twig_Template
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
        $__internal_b7d4086bfc5a1115872ffa619b383852ae42bf176aa39c30b3a6390fe4e7c8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d4086bfc5a1115872ffa619b383852ae42bf176aa39c30b3a6390fe4e7c8e6->enter($__internal_b7d4086bfc5a1115872ffa619b383852ae42bf176aa39c30b3a6390fe4e7c8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0ebe404135a2ccac812984eec9853fe62baf38ad07f56dec51f9206c01ad782e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebe404135a2ccac812984eec9853fe62baf38ad07f56dec51f9206c01ad782e->enter($__internal_0ebe404135a2ccac812984eec9853fe62baf38ad07f56dec51f9206c01ad782e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b7d4086bfc5a1115872ffa619b383852ae42bf176aa39c30b3a6390fe4e7c8e6->leave($__internal_b7d4086bfc5a1115872ffa619b383852ae42bf176aa39c30b3a6390fe4e7c8e6_prof);

        
        $__internal_0ebe404135a2ccac812984eec9853fe62baf38ad07f56dec51f9206c01ad782e->leave($__internal_0ebe404135a2ccac812984eec9853fe62baf38ad07f56dec51f9206c01ad782e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf015c7ab117b2193e1189c57ad2811e2bb31bcaf24fbdf35d61b0d22a0d1f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf015c7ab117b2193e1189c57ad2811e2bb31bcaf24fbdf35d61b0d22a0d1f49->enter($__internal_bf015c7ab117b2193e1189c57ad2811e2bb31bcaf24fbdf35d61b0d22a0d1f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1864ba5e756c6231d349035a625dee45cf73fc6bbd6fd36a4fca44494186cd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1864ba5e756c6231d349035a625dee45cf73fc6bbd6fd36a4fca44494186cd0d->enter($__internal_1864ba5e756c6231d349035a625dee45cf73fc6bbd6fd36a4fca44494186cd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1864ba5e756c6231d349035a625dee45cf73fc6bbd6fd36a4fca44494186cd0d->leave($__internal_1864ba5e756c6231d349035a625dee45cf73fc6bbd6fd36a4fca44494186cd0d_prof);

        
        $__internal_bf015c7ab117b2193e1189c57ad2811e2bb31bcaf24fbdf35d61b0d22a0d1f49->leave($__internal_bf015c7ab117b2193e1189c57ad2811e2bb31bcaf24fbdf35d61b0d22a0d1f49_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebc6567cb3839260d3f882e83f5603e86c83303d21d6ab7f2ed33347bce90b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc6567cb3839260d3f882e83f5603e86c83303d21d6ab7f2ed33347bce90b5c->enter($__internal_ebc6567cb3839260d3f882e83f5603e86c83303d21d6ab7f2ed33347bce90b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02633ca37fedb384e55f5e449d5c17919a4eeeba48570cca4e9389ad5fa18a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02633ca37fedb384e55f5e449d5c17919a4eeeba48570cca4e9389ad5fa18a52->enter($__internal_02633ca37fedb384e55f5e449d5c17919a4eeeba48570cca4e9389ad5fa18a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_02633ca37fedb384e55f5e449d5c17919a4eeeba48570cca4e9389ad5fa18a52->leave($__internal_02633ca37fedb384e55f5e449d5c17919a4eeeba48570cca4e9389ad5fa18a52_prof);

        
        $__internal_ebc6567cb3839260d3f882e83f5603e86c83303d21d6ab7f2ed33347bce90b5c->leave($__internal_ebc6567cb3839260d3f882e83f5603e86c83303d21d6ab7f2ed33347bce90b5c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cafb7dfbd06d1e467f8340b8f3deb68cfc07f3975679717852717800d365a887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafb7dfbd06d1e467f8340b8f3deb68cfc07f3975679717852717800d365a887->enter($__internal_cafb7dfbd06d1e467f8340b8f3deb68cfc07f3975679717852717800d365a887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33a351b1b4b008080dbfc6e9cfc100687838d638e320fc8dbff063fcb76be6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a351b1b4b008080dbfc6e9cfc100687838d638e320fc8dbff063fcb76be6eb->enter($__internal_33a351b1b4b008080dbfc6e9cfc100687838d638e320fc8dbff063fcb76be6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33a351b1b4b008080dbfc6e9cfc100687838d638e320fc8dbff063fcb76be6eb->leave($__internal_33a351b1b4b008080dbfc6e9cfc100687838d638e320fc8dbff063fcb76be6eb_prof);

        
        $__internal_cafb7dfbd06d1e467f8340b8f3deb68cfc07f3975679717852717800d365a887->leave($__internal_cafb7dfbd06d1e467f8340b8f3deb68cfc07f3975679717852717800d365a887_prof);

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
