<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6b1b118ca9a4f51e779e95d9f3e4cd5a7efce8433f21005203583c13633b4d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03b3a6f8999e427b05ac7cb21e9a6267fc25e74fdabbb9b106139854eca01ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b3a6f8999e427b05ac7cb21e9a6267fc25e74fdabbb9b106139854eca01ef3->enter($__internal_03b3a6f8999e427b05ac7cb21e9a6267fc25e74fdabbb9b106139854eca01ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d581d7328f8995ed8c3a04443d6f3579731dc8418c0ebfad9459fb22baec56de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d581d7328f8995ed8c3a04443d6f3579731dc8418c0ebfad9459fb22baec56de->enter($__internal_d581d7328f8995ed8c3a04443d6f3579731dc8418c0ebfad9459fb22baec56de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b3a6f8999e427b05ac7cb21e9a6267fc25e74fdabbb9b106139854eca01ef3->leave($__internal_03b3a6f8999e427b05ac7cb21e9a6267fc25e74fdabbb9b106139854eca01ef3_prof);

        
        $__internal_d581d7328f8995ed8c3a04443d6f3579731dc8418c0ebfad9459fb22baec56de->leave($__internal_d581d7328f8995ed8c3a04443d6f3579731dc8418c0ebfad9459fb22baec56de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79112864f3b14fb8d4b0824dcef85e971c51fa8ad27e5ce498a9bc6d6c3b81c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79112864f3b14fb8d4b0824dcef85e971c51fa8ad27e5ce498a9bc6d6c3b81c8->enter($__internal_79112864f3b14fb8d4b0824dcef85e971c51fa8ad27e5ce498a9bc6d6c3b81c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10b95f18c771100be5a35d4bb690bf0e01036c893f864e6e0bc75e207e7e7bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b95f18c771100be5a35d4bb690bf0e01036c893f864e6e0bc75e207e7e7bfd->enter($__internal_10b95f18c771100be5a35d4bb690bf0e01036c893f864e6e0bc75e207e7e7bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_10b95f18c771100be5a35d4bb690bf0e01036c893f864e6e0bc75e207e7e7bfd->leave($__internal_10b95f18c771100be5a35d4bb690bf0e01036c893f864e6e0bc75e207e7e7bfd_prof);

        
        $__internal_79112864f3b14fb8d4b0824dcef85e971c51fa8ad27e5ce498a9bc6d6c3b81c8->leave($__internal_79112864f3b14fb8d4b0824dcef85e971c51fa8ad27e5ce498a9bc6d6c3b81c8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_35df094d7a3a9c873f2f3532a26df778bd85e9f15bad6eca25532829d2529adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35df094d7a3a9c873f2f3532a26df778bd85e9f15bad6eca25532829d2529adb->enter($__internal_35df094d7a3a9c873f2f3532a26df778bd85e9f15bad6eca25532829d2529adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a08fcd724c8fd9a2169a8682a699ace06cc0b52c1a4d0a03a2696f20e28e9381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08fcd724c8fd9a2169a8682a699ace06cc0b52c1a4d0a03a2696f20e28e9381->enter($__internal_a08fcd724c8fd9a2169a8682a699ace06cc0b52c1a4d0a03a2696f20e28e9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a08fcd724c8fd9a2169a8682a699ace06cc0b52c1a4d0a03a2696f20e28e9381->leave($__internal_a08fcd724c8fd9a2169a8682a699ace06cc0b52c1a4d0a03a2696f20e28e9381_prof);

        
        $__internal_35df094d7a3a9c873f2f3532a26df778bd85e9f15bad6eca25532829d2529adb->leave($__internal_35df094d7a3a9c873f2f3532a26df778bd85e9f15bad6eca25532829d2529adb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e311bab3ae70213ea3c962cc75e883432d43b6f0ee5241069fcfce417d94897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e311bab3ae70213ea3c962cc75e883432d43b6f0ee5241069fcfce417d94897->enter($__internal_2e311bab3ae70213ea3c962cc75e883432d43b6f0ee5241069fcfce417d94897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aed341757584369706d07ba8c5a670ad0700883d06288a41d5bbe016bdca615b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed341757584369706d07ba8c5a670ad0700883d06288a41d5bbe016bdca615b->enter($__internal_aed341757584369706d07ba8c5a670ad0700883d06288a41d5bbe016bdca615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aed341757584369706d07ba8c5a670ad0700883d06288a41d5bbe016bdca615b->leave($__internal_aed341757584369706d07ba8c5a670ad0700883d06288a41d5bbe016bdca615b_prof);

        
        $__internal_2e311bab3ae70213ea3c962cc75e883432d43b6f0ee5241069fcfce417d94897->leave($__internal_2e311bab3ae70213ea3c962cc75e883432d43b6f0ee5241069fcfce417d94897_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
