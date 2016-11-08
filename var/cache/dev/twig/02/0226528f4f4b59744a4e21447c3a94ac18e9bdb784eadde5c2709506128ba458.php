<?php

/* base.html.twig */
class __TwigTemplate_7d3430f3b3ee99e9bec79fe8ab870ca712506bd41f05f1b0844f2b2a769709d9 extends Twig_Template
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
        $__internal_866b37d4dd427255f550ad745d794aaaf1fad3b523eb7123b2a200b6c38015b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866b37d4dd427255f550ad745d794aaaf1fad3b523eb7123b2a200b6c38015b3->enter($__internal_866b37d4dd427255f550ad745d794aaaf1fad3b523eb7123b2a200b6c38015b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_866b37d4dd427255f550ad745d794aaaf1fad3b523eb7123b2a200b6c38015b3->leave($__internal_866b37d4dd427255f550ad745d794aaaf1fad3b523eb7123b2a200b6c38015b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_65052e85c5a7e00266ad0fd21ac3544efdae6069d7e7257375e3e82d977876d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65052e85c5a7e00266ad0fd21ac3544efdae6069d7e7257375e3e82d977876d9->enter($__internal_65052e85c5a7e00266ad0fd21ac3544efdae6069d7e7257375e3e82d977876d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_65052e85c5a7e00266ad0fd21ac3544efdae6069d7e7257375e3e82d977876d9->leave($__internal_65052e85c5a7e00266ad0fd21ac3544efdae6069d7e7257375e3e82d977876d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6f16e809cd3d539eb5194a16d2fd853b63e8bd21dea8406ba16e5af975d7d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f16e809cd3d539eb5194a16d2fd853b63e8bd21dea8406ba16e5af975d7d24->enter($__internal_f6f16e809cd3d539eb5194a16d2fd853b63e8bd21dea8406ba16e5af975d7d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f6f16e809cd3d539eb5194a16d2fd853b63e8bd21dea8406ba16e5af975d7d24->leave($__internal_f6f16e809cd3d539eb5194a16d2fd853b63e8bd21dea8406ba16e5af975d7d24_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9a5d60039871445d0e468c304270d1e76c1c2a449a5277d8689e75a80e3e441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a5d60039871445d0e468c304270d1e76c1c2a449a5277d8689e75a80e3e441->enter($__internal_a9a5d60039871445d0e468c304270d1e76c1c2a449a5277d8689e75a80e3e441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_a9a5d60039871445d0e468c304270d1e76c1c2a449a5277d8689e75a80e3e441->leave($__internal_a9a5d60039871445d0e468c304270d1e76c1c2a449a5277d8689e75a80e3e441_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b1b604313ac704bd8245a484a7219d0aaf42bc61eb3cc994e14b145e8c55015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1b604313ac704bd8245a484a7219d0aaf42bc61eb3cc994e14b145e8c55015->enter($__internal_4b1b604313ac704bd8245a484a7219d0aaf42bc61eb3cc994e14b145e8c55015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_4b1b604313ac704bd8245a484a7219d0aaf42bc61eb3cc994e14b145e8c55015->leave($__internal_4b1b604313ac704bd8245a484a7219d0aaf42bc61eb3cc994e14b145e8c55015_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/whitea/dev-projects/php/firebase-chat/app/Resources/views/base.html.twig");
    }
}
