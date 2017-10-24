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
        $__internal_d3665e43588b0eaf379fe670211f0ed29282ec0d4952672f0afbff4740fc390d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3665e43588b0eaf379fe670211f0ed29282ec0d4952672f0afbff4740fc390d->enter($__internal_d3665e43588b0eaf379fe670211f0ed29282ec0d4952672f0afbff4740fc390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c10ae1342ffb6100b2fc631b7d6b0ed567c61d28fb19e48c71a06851af82a4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10ae1342ffb6100b2fc631b7d6b0ed567c61d28fb19e48c71a06851af82a4ed->enter($__internal_c10ae1342ffb6100b2fc631b7d6b0ed567c61d28fb19e48c71a06851af82a4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d3665e43588b0eaf379fe670211f0ed29282ec0d4952672f0afbff4740fc390d->leave($__internal_d3665e43588b0eaf379fe670211f0ed29282ec0d4952672f0afbff4740fc390d_prof);

        
        $__internal_c10ae1342ffb6100b2fc631b7d6b0ed567c61d28fb19e48c71a06851af82a4ed->leave($__internal_c10ae1342ffb6100b2fc631b7d6b0ed567c61d28fb19e48c71a06851af82a4ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_861efcf5df873f9eac134704bc3e5e288b93d6ed75c447e4a86af70537136b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861efcf5df873f9eac134704bc3e5e288b93d6ed75c447e4a86af70537136b4c->enter($__internal_861efcf5df873f9eac134704bc3e5e288b93d6ed75c447e4a86af70537136b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ed93ac397403a6c0d14a8ad114e84eb65f93a908fe69ae0be16fa0ca8f165ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed93ac397403a6c0d14a8ad114e84eb65f93a908fe69ae0be16fa0ca8f165ef->enter($__internal_4ed93ac397403a6c0d14a8ad114e84eb65f93a908fe69ae0be16fa0ca8f165ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4ed93ac397403a6c0d14a8ad114e84eb65f93a908fe69ae0be16fa0ca8f165ef->leave($__internal_4ed93ac397403a6c0d14a8ad114e84eb65f93a908fe69ae0be16fa0ca8f165ef_prof);

        
        $__internal_861efcf5df873f9eac134704bc3e5e288b93d6ed75c447e4a86af70537136b4c->leave($__internal_861efcf5df873f9eac134704bc3e5e288b93d6ed75c447e4a86af70537136b4c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b13d619b6766e160edd72d27bfa3cd323106163ac9be3d53e5a07ee66c4c48dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13d619b6766e160edd72d27bfa3cd323106163ac9be3d53e5a07ee66c4c48dc->enter($__internal_b13d619b6766e160edd72d27bfa3cd323106163ac9be3d53e5a07ee66c4c48dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d753e873b8f65f110475dd3350b2f615f1ee2f08e4f3c00369b36b291a234be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d753e873b8f65f110475dd3350b2f615f1ee2f08e4f3c00369b36b291a234be5->enter($__internal_d753e873b8f65f110475dd3350b2f615f1ee2f08e4f3c00369b36b291a234be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d753e873b8f65f110475dd3350b2f615f1ee2f08e4f3c00369b36b291a234be5->leave($__internal_d753e873b8f65f110475dd3350b2f615f1ee2f08e4f3c00369b36b291a234be5_prof);

        
        $__internal_b13d619b6766e160edd72d27bfa3cd323106163ac9be3d53e5a07ee66c4c48dc->leave($__internal_b13d619b6766e160edd72d27bfa3cd323106163ac9be3d53e5a07ee66c4c48dc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0561923f3b882edfa98212e9c51aa11206a5f25774e28547cfcc16e32ae5e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0561923f3b882edfa98212e9c51aa11206a5f25774e28547cfcc16e32ae5e58->enter($__internal_a0561923f3b882edfa98212e9c51aa11206a5f25774e28547cfcc16e32ae5e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dd5a8807da514bbf7aefa7c81e1cc0f159989022c6eae7a28b9c044668be654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd5a8807da514bbf7aefa7c81e1cc0f159989022c6eae7a28b9c044668be654->enter($__internal_6dd5a8807da514bbf7aefa7c81e1cc0f159989022c6eae7a28b9c044668be654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6dd5a8807da514bbf7aefa7c81e1cc0f159989022c6eae7a28b9c044668be654->leave($__internal_6dd5a8807da514bbf7aefa7c81e1cc0f159989022c6eae7a28b9c044668be654_prof);

        
        $__internal_a0561923f3b882edfa98212e9c51aa11206a5f25774e28547cfcc16e32ae5e58->leave($__internal_a0561923f3b882edfa98212e9c51aa11206a5f25774e28547cfcc16e32ae5e58_prof);

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
