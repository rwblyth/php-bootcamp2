<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_db610da6710b2104a329f9554bb4dd8bef48d231696296500cf7cde0bec62386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eddf80e1a4bd8a92dd7d7649b8fb7013e59f76611697b72b7256b699e1bd84d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddf80e1a4bd8a92dd7d7649b8fb7013e59f76611697b72b7256b699e1bd84d2->enter($__internal_eddf80e1a4bd8a92dd7d7649b8fb7013e59f76611697b72b7256b699e1bd84d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eddf80e1a4bd8a92dd7d7649b8fb7013e59f76611697b72b7256b699e1bd84d2->leave($__internal_eddf80e1a4bd8a92dd7d7649b8fb7013e59f76611697b72b7256b699e1bd84d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5692502d9e84924f9268388a7032ffa08e4b4fb03264f4cc294b861471e4721e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5692502d9e84924f9268388a7032ffa08e4b4fb03264f4cc294b861471e4721e->enter($__internal_5692502d9e84924f9268388a7032ffa08e4b4fb03264f4cc294b861471e4721e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_5692502d9e84924f9268388a7032ffa08e4b4fb03264f4cc294b861471e4721e->leave($__internal_5692502d9e84924f9268388a7032ffa08e4b4fb03264f4cc294b861471e4721e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd012b7f9f893ffb247b2fc11c5a1c8f0389fad9ada76fa9e07e1d785e0873bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd012b7f9f893ffb247b2fc11c5a1c8f0389fad9ada76fa9e07e1d785e0873bf->enter($__internal_fd012b7f9f893ffb247b2fc11c5a1c8f0389fad9ada76fa9e07e1d785e0873bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd012b7f9f893ffb247b2fc11c5a1c8f0389fad9ada76fa9e07e1d785e0873bf->leave($__internal_fd012b7f9f893ffb247b2fc11c5a1c8f0389fad9ada76fa9e07e1d785e0873bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_064c4171dcc4f3e3a03016c4f40838586d048994da8bc249a74be259ccb86780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064c4171dcc4f3e3a03016c4f40838586d048994da8bc249a74be259ccb86780->enter($__internal_064c4171dcc4f3e3a03016c4f40838586d048994da8bc249a74be259ccb86780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_064c4171dcc4f3e3a03016c4f40838586d048994da8bc249a74be259ccb86780->leave($__internal_064c4171dcc4f3e3a03016c4f40838586d048994da8bc249a74be259ccb86780_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/whitea/dev-projects/php/firebase-chat/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
