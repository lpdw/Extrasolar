<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_50a71989258f4bc445eb411ae1ed0edf9c541244431330bfa324c366f4c0af03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a71989258f4bc445eb411ae1ed0edf9c541244431330bfa324c366f4c0af03->enter($__internal_50a71989258f4bc445eb411ae1ed0edf9c541244431330bfa324c366f4c0af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_34d4eb9042529ba8965522fdd267e72e3b5049f22bed82097b6c6a012467bdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d4eb9042529ba8965522fdd267e72e3b5049f22bed82097b6c6a012467bdd1->enter($__internal_34d4eb9042529ba8965522fdd267e72e3b5049f22bed82097b6c6a012467bdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a71989258f4bc445eb411ae1ed0edf9c541244431330bfa324c366f4c0af03->leave($__internal_50a71989258f4bc445eb411ae1ed0edf9c541244431330bfa324c366f4c0af03_prof);

        
        $__internal_34d4eb9042529ba8965522fdd267e72e3b5049f22bed82097b6c6a012467bdd1->leave($__internal_34d4eb9042529ba8965522fdd267e72e3b5049f22bed82097b6c6a012467bdd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b137e71da2e34aab6ad4c4a74c11334f3c1ea32f02322021b63ba6181bf7fb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b137e71da2e34aab6ad4c4a74c11334f3c1ea32f02322021b63ba6181bf7fb97->enter($__internal_b137e71da2e34aab6ad4c4a74c11334f3c1ea32f02322021b63ba6181bf7fb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca0f0555dc0b1f2c3957ce86a57e4f8a34542cd9e9d51c6fc31105ccde12550b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0f0555dc0b1f2c3957ce86a57e4f8a34542cd9e9d51c6fc31105ccde12550b->enter($__internal_ca0f0555dc0b1f2c3957ce86a57e4f8a34542cd9e9d51c6fc31105ccde12550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ca0f0555dc0b1f2c3957ce86a57e4f8a34542cd9e9d51c6fc31105ccde12550b->leave($__internal_ca0f0555dc0b1f2c3957ce86a57e4f8a34542cd9e9d51c6fc31105ccde12550b_prof);

        
        $__internal_b137e71da2e34aab6ad4c4a74c11334f3c1ea32f02322021b63ba6181bf7fb97->leave($__internal_b137e71da2e34aab6ad4c4a74c11334f3c1ea32f02322021b63ba6181bf7fb97_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c21cd6c2e02d26070fa8028978871bf104aca647bba29c066ac8eb5da08d9fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21cd6c2e02d26070fa8028978871bf104aca647bba29c066ac8eb5da08d9fa6->enter($__internal_c21cd6c2e02d26070fa8028978871bf104aca647bba29c066ac8eb5da08d9fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ac3365e97f356b94bba94c9e9be6547b5b2e66a75a296e9ee413e2dada9e3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac3365e97f356b94bba94c9e9be6547b5b2e66a75a296e9ee413e2dada9e3d5->enter($__internal_0ac3365e97f356b94bba94c9e9be6547b5b2e66a75a296e9ee413e2dada9e3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0ac3365e97f356b94bba94c9e9be6547b5b2e66a75a296e9ee413e2dada9e3d5->leave($__internal_0ac3365e97f356b94bba94c9e9be6547b5b2e66a75a296e9ee413e2dada9e3d5_prof);

        
        $__internal_c21cd6c2e02d26070fa8028978871bf104aca647bba29c066ac8eb5da08d9fa6->leave($__internal_c21cd6c2e02d26070fa8028978871bf104aca647bba29c066ac8eb5da08d9fa6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de0b710252a1d0fe0353c018c8ab6b35cdf10112fe1dcf2e60c017809e0387b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0b710252a1d0fe0353c018c8ab6b35cdf10112fe1dcf2e60c017809e0387b9->enter($__internal_de0b710252a1d0fe0353c018c8ab6b35cdf10112fe1dcf2e60c017809e0387b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f121db889a4a0bc45fae5f2ad73b1f5ff490253ebb5010d2732e71af78826b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f121db889a4a0bc45fae5f2ad73b1f5ff490253ebb5010d2732e71af78826b1f->enter($__internal_f121db889a4a0bc45fae5f2ad73b1f5ff490253ebb5010d2732e71af78826b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f121db889a4a0bc45fae5f2ad73b1f5ff490253ebb5010d2732e71af78826b1f->leave($__internal_f121db889a4a0bc45fae5f2ad73b1f5ff490253ebb5010d2732e71af78826b1f_prof);

        
        $__internal_de0b710252a1d0fe0353c018c8ab6b35cdf10112fe1dcf2e60c017809e0387b9->leave($__internal_de0b710252a1d0fe0353c018c8ab6b35cdf10112fe1dcf2e60c017809e0387b9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
