<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_36c9f179f7b8af5c18b486640948fbf0bf8663e795b6c2bd6fa9b65bb1d31063 extends Twig_Template
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
        $__internal_7a21dd2e3659419ada989053f74fb5860bad1e83d4875683a3b2de073a801fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a21dd2e3659419ada989053f74fb5860bad1e83d4875683a3b2de073a801fda->enter($__internal_7a21dd2e3659419ada989053f74fb5860bad1e83d4875683a3b2de073a801fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a8aa28c051e6335811596e49786a18c16f20dd6c9aeac19ce3c4da610dbf898a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8aa28c051e6335811596e49786a18c16f20dd6c9aeac19ce3c4da610dbf898a->enter($__internal_a8aa28c051e6335811596e49786a18c16f20dd6c9aeac19ce3c4da610dbf898a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7a21dd2e3659419ada989053f74fb5860bad1e83d4875683a3b2de073a801fda->leave($__internal_7a21dd2e3659419ada989053f74fb5860bad1e83d4875683a3b2de073a801fda_prof);

        
        $__internal_a8aa28c051e6335811596e49786a18c16f20dd6c9aeac19ce3c4da610dbf898a->leave($__internal_a8aa28c051e6335811596e49786a18c16f20dd6c9aeac19ce3c4da610dbf898a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_391e6d9b846a16b77b2885cf851f2634df3441856de4fe39b1d5fc2d0a823f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391e6d9b846a16b77b2885cf851f2634df3441856de4fe39b1d5fc2d0a823f59->enter($__internal_391e6d9b846a16b77b2885cf851f2634df3441856de4fe39b1d5fc2d0a823f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_993c0a26f55ad377e243a452d0572fbbb992246145393e89009aa8562fdb2838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993c0a26f55ad377e243a452d0572fbbb992246145393e89009aa8562fdb2838->enter($__internal_993c0a26f55ad377e243a452d0572fbbb992246145393e89009aa8562fdb2838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_993c0a26f55ad377e243a452d0572fbbb992246145393e89009aa8562fdb2838->leave($__internal_993c0a26f55ad377e243a452d0572fbbb992246145393e89009aa8562fdb2838_prof);

        
        $__internal_391e6d9b846a16b77b2885cf851f2634df3441856de4fe39b1d5fc2d0a823f59->leave($__internal_391e6d9b846a16b77b2885cf851f2634df3441856de4fe39b1d5fc2d0a823f59_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ceaefb6eeb8c877b966ba0c9f0810206f4741c393be69af69e49292302d99c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceaefb6eeb8c877b966ba0c9f0810206f4741c393be69af69e49292302d99c0f->enter($__internal_ceaefb6eeb8c877b966ba0c9f0810206f4741c393be69af69e49292302d99c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_754c7ac84ed80670f342a60b8ba4bcfe362e884fd1d33d646809766e037301bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754c7ac84ed80670f342a60b8ba4bcfe362e884fd1d33d646809766e037301bc->enter($__internal_754c7ac84ed80670f342a60b8ba4bcfe362e884fd1d33d646809766e037301bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_754c7ac84ed80670f342a60b8ba4bcfe362e884fd1d33d646809766e037301bc->leave($__internal_754c7ac84ed80670f342a60b8ba4bcfe362e884fd1d33d646809766e037301bc_prof);

        
        $__internal_ceaefb6eeb8c877b966ba0c9f0810206f4741c393be69af69e49292302d99c0f->leave($__internal_ceaefb6eeb8c877b966ba0c9f0810206f4741c393be69af69e49292302d99c0f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5df89a4c212eb25428c9b798f81b0d89e9ffdfd9e504b9d5fa97cb0dc404c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5df89a4c212eb25428c9b798f81b0d89e9ffdfd9e504b9d5fa97cb0dc404c2c->enter($__internal_b5df89a4c212eb25428c9b798f81b0d89e9ffdfd9e504b9d5fa97cb0dc404c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d99252d227b9bddebb192dfbfc24db175997be0bddec2bd48fd258fa380eae12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99252d227b9bddebb192dfbfc24db175997be0bddec2bd48fd258fa380eae12->enter($__internal_d99252d227b9bddebb192dfbfc24db175997be0bddec2bd48fd258fa380eae12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d99252d227b9bddebb192dfbfc24db175997be0bddec2bd48fd258fa380eae12->leave($__internal_d99252d227b9bddebb192dfbfc24db175997be0bddec2bd48fd258fa380eae12_prof);

        
        $__internal_b5df89a4c212eb25428c9b798f81b0d89e9ffdfd9e504b9d5fa97cb0dc404c2c->leave($__internal_b5df89a4c212eb25428c9b798f81b0d89e9ffdfd9e504b9d5fa97cb0dc404c2c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/layout.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
