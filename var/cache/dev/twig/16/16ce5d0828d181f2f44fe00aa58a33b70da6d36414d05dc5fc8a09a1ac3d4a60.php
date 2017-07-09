<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9bec9c1139426df76c081e6ef116bd2e812519a4d5506c90fcd87d715956378d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_670dec7f020691dc477b1c41f0621d23f0757e274f6cec9aae4e93e5b8da0920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670dec7f020691dc477b1c41f0621d23f0757e274f6cec9aae4e93e5b8da0920->enter($__internal_670dec7f020691dc477b1c41f0621d23f0757e274f6cec9aae4e93e5b8da0920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_eabdc8ca9b6a47a8f08fee1ba4dbd72008e008fa5b1d01ef35c3171985f70ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabdc8ca9b6a47a8f08fee1ba4dbd72008e008fa5b1d01ef35c3171985f70ae9->enter($__internal_eabdc8ca9b6a47a8f08fee1ba4dbd72008e008fa5b1d01ef35c3171985f70ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670dec7f020691dc477b1c41f0621d23f0757e274f6cec9aae4e93e5b8da0920->leave($__internal_670dec7f020691dc477b1c41f0621d23f0757e274f6cec9aae4e93e5b8da0920_prof);

        
        $__internal_eabdc8ca9b6a47a8f08fee1ba4dbd72008e008fa5b1d01ef35c3171985f70ae9->leave($__internal_eabdc8ca9b6a47a8f08fee1ba4dbd72008e008fa5b1d01ef35c3171985f70ae9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31ec1fd0d442c26c964861b466622ce0b7ee6fba97e2c0eea64ca66890d1f887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ec1fd0d442c26c964861b466622ce0b7ee6fba97e2c0eea64ca66890d1f887->enter($__internal_31ec1fd0d442c26c964861b466622ce0b7ee6fba97e2c0eea64ca66890d1f887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd838dfd54aeef5fc700f27387f7364a4218907b2fa57896cf4e46400a42ff99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd838dfd54aeef5fc700f27387f7364a4218907b2fa57896cf4e46400a42ff99->enter($__internal_cd838dfd54aeef5fc700f27387f7364a4218907b2fa57896cf4e46400a42ff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cd838dfd54aeef5fc700f27387f7364a4218907b2fa57896cf4e46400a42ff99->leave($__internal_cd838dfd54aeef5fc700f27387f7364a4218907b2fa57896cf4e46400a42ff99_prof);

        
        $__internal_31ec1fd0d442c26c964861b466622ce0b7ee6fba97e2c0eea64ca66890d1f887->leave($__internal_31ec1fd0d442c26c964861b466622ce0b7ee6fba97e2c0eea64ca66890d1f887_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
