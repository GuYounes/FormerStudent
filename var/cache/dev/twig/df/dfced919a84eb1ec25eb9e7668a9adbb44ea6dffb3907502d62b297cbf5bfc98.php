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
        $__internal_3e438f50896d88289d5b2ebc6ca8f59969dabe5c496aae328979d97bea3bc1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e438f50896d88289d5b2ebc6ca8f59969dabe5c496aae328979d97bea3bc1ac->enter($__internal_3e438f50896d88289d5b2ebc6ca8f59969dabe5c496aae328979d97bea3bc1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_490021cedc63154fdccf8edb564f917f37c1a3983c7f94f923b024a5862daa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490021cedc63154fdccf8edb564f917f37c1a3983c7f94f923b024a5862daa77->enter($__internal_490021cedc63154fdccf8edb564f917f37c1a3983c7f94f923b024a5862daa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3e438f50896d88289d5b2ebc6ca8f59969dabe5c496aae328979d97bea3bc1ac->leave($__internal_3e438f50896d88289d5b2ebc6ca8f59969dabe5c496aae328979d97bea3bc1ac_prof);

        
        $__internal_490021cedc63154fdccf8edb564f917f37c1a3983c7f94f923b024a5862daa77->leave($__internal_490021cedc63154fdccf8edb564f917f37c1a3983c7f94f923b024a5862daa77_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce65079f1af6e1d59b69f7a97ea9273d2b66bc83897cf29ffc453adf7fb2de52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce65079f1af6e1d59b69f7a97ea9273d2b66bc83897cf29ffc453adf7fb2de52->enter($__internal_ce65079f1af6e1d59b69f7a97ea9273d2b66bc83897cf29ffc453adf7fb2de52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cdf63d04b44fefd2fc8a75b72414537d534d1c33ecd1451ee6ee57254b0f660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdf63d04b44fefd2fc8a75b72414537d534d1c33ecd1451ee6ee57254b0f660->enter($__internal_3cdf63d04b44fefd2fc8a75b72414537d534d1c33ecd1451ee6ee57254b0f660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3cdf63d04b44fefd2fc8a75b72414537d534d1c33ecd1451ee6ee57254b0f660->leave($__internal_3cdf63d04b44fefd2fc8a75b72414537d534d1c33ecd1451ee6ee57254b0f660_prof);

        
        $__internal_ce65079f1af6e1d59b69f7a97ea9273d2b66bc83897cf29ffc453adf7fb2de52->leave($__internal_ce65079f1af6e1d59b69f7a97ea9273d2b66bc83897cf29ffc453adf7fb2de52_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9428398e222850815e9e57811be433527efa068cb67fdba0ecf6ff94ab980990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9428398e222850815e9e57811be433527efa068cb67fdba0ecf6ff94ab980990->enter($__internal_9428398e222850815e9e57811be433527efa068cb67fdba0ecf6ff94ab980990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7b1708e15964393829372c1e66579e6e8aa1a3085c3e787b4518d52b82212ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b1708e15964393829372c1e66579e6e8aa1a3085c3e787b4518d52b82212ce->enter($__internal_d7b1708e15964393829372c1e66579e6e8aa1a3085c3e787b4518d52b82212ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d7b1708e15964393829372c1e66579e6e8aa1a3085c3e787b4518d52b82212ce->leave($__internal_d7b1708e15964393829372c1e66579e6e8aa1a3085c3e787b4518d52b82212ce_prof);

        
        $__internal_9428398e222850815e9e57811be433527efa068cb67fdba0ecf6ff94ab980990->leave($__internal_9428398e222850815e9e57811be433527efa068cb67fdba0ecf6ff94ab980990_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f3185ac490f91f5d99eb3d818da196b06efa8dd38b453909eac7d9563a7c322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3185ac490f91f5d99eb3d818da196b06efa8dd38b453909eac7d9563a7c322->enter($__internal_4f3185ac490f91f5d99eb3d818da196b06efa8dd38b453909eac7d9563a7c322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82f4d5082f0bd402e05441edd94c8cfde69cd3411c3d6f3550e9c75fbec0e2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f4d5082f0bd402e05441edd94c8cfde69cd3411c3d6f3550e9c75fbec0e2e8->enter($__internal_82f4d5082f0bd402e05441edd94c8cfde69cd3411c3d6f3550e9c75fbec0e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_82f4d5082f0bd402e05441edd94c8cfde69cd3411c3d6f3550e9c75fbec0e2e8->leave($__internal_82f4d5082f0bd402e05441edd94c8cfde69cd3411c3d6f3550e9c75fbec0e2e8_prof);

        
        $__internal_4f3185ac490f91f5d99eb3d818da196b06efa8dd38b453909eac7d9563a7c322->leave($__internal_4f3185ac490f91f5d99eb3d818da196b06efa8dd38b453909eac7d9563a7c322_prof);

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
