<?php

/* RytisNewsLettersBundle:Main:index.html.twig */
class __TwigTemplate_7f20b9f66b258e381a83d5670f0c229bccf7c1b833461262396e774f2c89e58e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RytisNewsLettersBundle::layout.html.twig", "RytisNewsLettersBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RytisNewsLettersBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d84d0ae99ec4e83c65022abcadd02b09a5258b9cdf6b48692a755f94d21240d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84d0ae99ec4e83c65022abcadd02b09a5258b9cdf6b48692a755f94d21240d8->enter($__internal_d84d0ae99ec4e83c65022abcadd02b09a5258b9cdf6b48692a755f94d21240d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle:Main:index.html.twig"));

        $__internal_bee3325248ad03ddf5adf68396b52a7b0e6fc960f27a136d71121ba3ad5152bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee3325248ad03ddf5adf68396b52a7b0e6fc960f27a136d71121ba3ad5152bf->enter($__internal_bee3325248ad03ddf5adf68396b52a7b0e6fc960f27a136d71121ba3ad5152bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d84d0ae99ec4e83c65022abcadd02b09a5258b9cdf6b48692a755f94d21240d8->leave($__internal_d84d0ae99ec4e83c65022abcadd02b09a5258b9cdf6b48692a755f94d21240d8_prof);

        
        $__internal_bee3325248ad03ddf5adf68396b52a7b0e6fc960f27a136d71121ba3ad5152bf->leave($__internal_bee3325248ad03ddf5adf68396b52a7b0e6fc960f27a136d71121ba3ad5152bf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_486d2430cd1f209b72091889bd31ea437121c5ccae89c6c4cdae480ba7d49934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486d2430cd1f209b72091889bd31ea437121c5ccae89c6c4cdae480ba7d49934->enter($__internal_486d2430cd1f209b72091889bd31ea437121c5ccae89c6c4cdae480ba7d49934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_283df3b5da0618fe85c708c4acf49d3fd7d84fe11584d596380fe7532fcb0ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283df3b5da0618fe85c708c4acf49d3fd7d84fe11584d596380fe7532fcb0ac8->enter($__internal_283df3b5da0618fe85c708c4acf49d3fd7d84fe11584d596380fe7532fcb0ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" href=\"http://anijs.github.io/lib/anicollection/anicollection.css\">
   <link rel=\"stylesheet\" href='";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/NewsLetters/css/NewsLettersCss.css"), "html", null, true);
        echo "'>
";
        
        $__internal_283df3b5da0618fe85c708c4acf49d3fd7d84fe11584d596380fe7532fcb0ac8->leave($__internal_283df3b5da0618fe85c708c4acf49d3fd7d84fe11584d596380fe7532fcb0ac8_prof);

        
        $__internal_486d2430cd1f209b72091889bd31ea437121c5ccae89c6c4cdae480ba7d49934->leave($__internal_486d2430cd1f209b72091889bd31ea437121c5ccae89c6c4cdae480ba7d49934_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8d5f38d14d2008d638ce5644c415bf763cce1a7f6db7c0d59c68d318d58043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8d5f38d14d2008d638ce5644c415bf763cce1a7f6db7c0d59c68d318d58043->enter($__internal_9d8d5f38d14d2008d638ce5644c415bf763cce1a7f6db7c0d59c68d318d58043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7b27866fa4452fb6f4142dc7325b7db50f0136b60df554333d39efeb9a34b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b27866fa4452fb6f4142dc7325b7db50f0136b60df554333d39efeb9a34b76->enter($__internal_e7b27866fa4452fb6f4142dc7325b7db50f0136b60df554333d39efeb9a34b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "   <div class=\"NewsLettersBlock\">
            <h1 id=\"form_title\">Naujienlaiškių formą ;)</h1>
       <div id=\"THANKS\" style=\"display:none;\">DEKUI!!!! :)</div>
       ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "newsletters_create_form")));
        echo "
       ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
       ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
   </div>

";
        
        $__internal_e7b27866fa4452fb6f4142dc7325b7db50f0136b60df554333d39efeb9a34b76->leave($__internal_e7b27866fa4452fb6f4142dc7325b7db50f0136b60df554333d39efeb9a34b76_prof);

        
        $__internal_9d8d5f38d14d2008d638ce5644c415bf763cce1a7f6db7c0d59c68d318d58043->leave($__internal_9d8d5f38d14d2008d638ce5644c415bf763cce1a7f6db7c0d59c68d318d58043_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97453b1b0d7dd76be50276e568ee290d8f76dd746beae425bb4b1ef54e59ad7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97453b1b0d7dd76be50276e568ee290d8f76dd746beae425bb4b1ef54e59ad7e->enter($__internal_97453b1b0d7dd76be50276e568ee290d8f76dd746beae425bb4b1ef54e59ad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b37ab74ff2fab46c6b5f380ea17123214ed10bde4cc83b79bcae56b6116ae8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37ab74ff2fab46c6b5f380ea17123214ed10bde4cc83b79bcae56b6116ae8b8->enter($__internal_b37ab74ff2fab46c6b5f380ea17123214ed10bde4cc83b79bcae56b6116ae8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>
   <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/NewsLetters/js/anijs.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/NewsLetters/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b37ab74ff2fab46c6b5f380ea17123214ed10bde4cc83b79bcae56b6116ae8b8->leave($__internal_b37ab74ff2fab46c6b5f380ea17123214ed10bde4cc83b79bcae56b6116ae8b8_prof);

        
        $__internal_97453b1b0d7dd76be50276e568ee290d8f76dd746beae425bb4b1ef54e59ad7e->leave($__internal_97453b1b0d7dd76be50276e568ee290d8f76dd746beae425bb4b1ef54e59ad7e_prof);

    }

    public function getTemplateName()
    {
        return "RytisNewsLettersBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 24,  120 => 23,  114 => 19,  105 => 18,  91 => 13,  87 => 12,  83 => 11,  78 => 8,  69 => 7,  57 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'RytisNewsLettersBundle::layout.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
   <link rel=\"stylesheet\" href=\"http://anijs.github.io/lib/anicollection/anicollection.css\">
   <link rel=\"stylesheet\" href='{{ asset(\"/assets/NewsLetters/css/NewsLettersCss.css\") }}'>
{% endblock %}
{% block body %}
   <div class=\"NewsLettersBlock\">
            <h1 id=\"form_title\">Naujienlaiškių formą ;)</h1>
       <div id=\"THANKS\" style=\"display:none;\">DEKUI!!!! :)</div>
       {{ form_start(form, {'attr': {'id': 'newsletters_create_form'}}) }}
       {{ form_widget(form) }}
       {{ form_end(form) }}
   </div>

{% endblock %}

{% block javascripts %}
    <script
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>
   <script src=\"{{ asset('/assets/NewsLetters/js/anijs.js') }}\"></script>
   <script src=\"{{ asset('/assets/NewsLetters/js/main.js') }}\"></script>
{% endblock %}
", "RytisNewsLettersBundle:Main:index.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\src\\Rytis\\NewsLettersBundle/Resources/views/Main/index.html.twig");
    }
}
