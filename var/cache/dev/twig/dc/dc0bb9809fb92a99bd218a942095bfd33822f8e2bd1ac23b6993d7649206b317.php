<?php

/* ::base.html.twig */
class __TwigTemplate_aaa161c310dcecf2b0607299d5353c510065f9384a93e27c9013c98e455d9322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d006dfac11f6e55d40b8e7974c21f76425670164c795a8773412f0c4a0b468c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d006dfac11f6e55d40b8e7974c21f76425670164c795a8773412f0c4a0b468c0->enter($__internal_d006dfac11f6e55d40b8e7974c21f76425670164c795a8773412f0c4a0b468c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a803864f0dbc73343a416a7ec3614bcdf439d7a022194fc68175bed565b314bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a803864f0dbc73343a416a7ec3614bcdf439d7a022194fc68175bed565b314bd->enter($__internal_a803864f0dbc73343a416a7ec3614bcdf439d7a022194fc68175bed565b314bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>

    <![endif]-->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>

<section id=\"wrapper\">
    <section class=\"main-co12\">
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "    </section>
</section>

";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_d006dfac11f6e55d40b8e7974c21f76425670164c795a8773412f0c4a0b468c0->leave($__internal_d006dfac11f6e55d40b8e7974c21f76425670164c795a8773412f0c4a0b468c0_prof);

        
        $__internal_a803864f0dbc73343a416a7ec3614bcdf439d7a022194fc68175bed565b314bd->leave($__internal_a803864f0dbc73343a416a7ec3614bcdf439d7a022194fc68175bed565b314bd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_db1135c559837b6314f4e55983bd1c767851781c1717c939597ebc292142620f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1135c559837b6314f4e55983bd1c767851781c1717c939597ebc292142620f->enter($__internal_db1135c559837b6314f4e55983bd1c767851781c1717c939597ebc292142620f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbb6e277750f3a97f2172515a8e61ada34be7ac6da670d13208f7632f347127b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb6e277750f3a97f2172515a8e61ada34be7ac6da670d13208f7632f347127b->enter($__internal_cbb6e277750f3a97f2172515a8e61ada34be7ac6da670d13208f7632f347127b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rytis Puodzius Testine Uzduotis";
        
        $__internal_cbb6e277750f3a97f2172515a8e61ada34be7ac6da670d13208f7632f347127b->leave($__internal_cbb6e277750f3a97f2172515a8e61ada34be7ac6da670d13208f7632f347127b_prof);

        
        $__internal_db1135c559837b6314f4e55983bd1c767851781c1717c939597ebc292142620f->leave($__internal_db1135c559837b6314f4e55983bd1c767851781c1717c939597ebc292142620f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f44ce421d1fcaea49d763a4a0e7fda2533bf35327d6e56a8c2d2b731afc46975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44ce421d1fcaea49d763a4a0e7fda2533bf35327d6e56a8c2d2b731afc46975->enter($__internal_f44ce421d1fcaea49d763a4a0e7fda2533bf35327d6e56a8c2d2b731afc46975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d34f990ad1a693be6baca18717f70796352f97961c51d64c6e5cb33adf1dc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d34f990ad1a693be6baca18717f70796352f97961c51d64c6e5cb33adf1dc6d->enter($__internal_0d34f990ad1a693be6baca18717f70796352f97961c51d64c6e5cb33adf1dc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    ";
        
        $__internal_0d34f990ad1a693be6baca18717f70796352f97961c51d64c6e5cb33adf1dc6d->leave($__internal_0d34f990ad1a693be6baca18717f70796352f97961c51d64c6e5cb33adf1dc6d_prof);

        
        $__internal_f44ce421d1fcaea49d763a4a0e7fda2533bf35327d6e56a8c2d2b731afc46975->leave($__internal_f44ce421d1fcaea49d763a4a0e7fda2533bf35327d6e56a8c2d2b731afc46975_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_db21c1ee195da20bed935ef7e284790cb3c24ae6716f29498fef847b2e58520d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db21c1ee195da20bed935ef7e284790cb3c24ae6716f29498fef847b2e58520d->enter($__internal_db21c1ee195da20bed935ef7e284790cb3c24ae6716f29498fef847b2e58520d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0fcbbcc593459e54176fd0999e9cb09e30c367074b3d53cff8ba2b81f74371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fcbbcc593459e54176fd0999e9cb09e30c367074b3d53cff8ba2b81f74371d->enter($__internal_e0fcbbcc593459e54176fd0999e9cb09e30c367074b3d53cff8ba2b81f74371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0fcbbcc593459e54176fd0999e9cb09e30c367074b3d53cff8ba2b81f74371d->leave($__internal_e0fcbbcc593459e54176fd0999e9cb09e30c367074b3d53cff8ba2b81f74371d_prof);

        
        $__internal_db21c1ee195da20bed935ef7e284790cb3c24ae6716f29498fef847b2e58520d->leave($__internal_db21c1ee195da20bed935ef7e284790cb3c24ae6716f29498fef847b2e58520d_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_529b913f2de5cf73c8828ee412a4fd35b7f977473c0f3b9c611dd5cf477b6d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529b913f2de5cf73c8828ee412a4fd35b7f977473c0f3b9c611dd5cf477b6d8b->enter($__internal_529b913f2de5cf73c8828ee412a4fd35b7f977473c0f3b9c611dd5cf477b6d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_48c7eef5d50f325c03851003e9e69603e5f727941f43cbacf5bf7cffbc64d61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c7eef5d50f325c03851003e9e69603e5f727941f43cbacf5bf7cffbc64d61b->enter($__internal_48c7eef5d50f325c03851003e9e69603e5f727941f43cbacf5bf7cffbc64d61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48c7eef5d50f325c03851003e9e69603e5f727941f43cbacf5bf7cffbc64d61b->leave($__internal_48c7eef5d50f325c03851003e9e69603e5f727941f43cbacf5bf7cffbc64d61b_prof);

        
        $__internal_529b913f2de5cf73c8828ee412a4fd35b7f977473c0f3b9c611dd5cf477b6d8b->leave($__internal_529b913f2de5cf73c8828ee412a4fd35b7f977473c0f3b9c611dd5cf477b6d8b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 22,  113 => 18,  99 => 10,  90 => 9,  72 => 4,  60 => 23,  58 => 22,  53 => 19,  51 => 18,  44 => 13,  42 => 9,  34 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
    <title>{% block title %}Rytis Puodzius Testine Uzduotis{% endblock %}</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>

    <![endif]-->
    {% block stylesheets %}
        <link href=\"{{ asset('assets/styles.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body>

<section id=\"wrapper\">
    <section class=\"main-co12\">
        {% block body %}{% endblock %}
    </section>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\app/Resources\\views/base.html.twig");
    }
}
