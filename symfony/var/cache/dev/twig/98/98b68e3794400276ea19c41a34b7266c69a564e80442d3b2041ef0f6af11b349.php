<?php

/* default/visualisation.html.twig */
class __TwigTemplate_b65f24683505f29aee37a97cc25cb144b99d64acb20776a2b3736d9f3eba8ade extends Twig_Template
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
        $__internal_5725c652f9f29c247302229b4c49661fc33397d9c7fd98d69a80a3f95752b22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5725c652f9f29c247302229b4c49661fc33397d9c7fd98d69a80a3f95752b22b->enter($__internal_5725c652f9f29c247302229b4c49661fc33397d9c7fd98d69a80a3f95752b22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

        $__internal_3e433f71892ca7d6f5db27ba6a93a38dc64026a3b17f2f1613d11aa702b3768f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e433f71892ca7d6f5db27ba6a93a38dc64026a3b17f2f1613d11aa702b3768f->enter($__internal_3e433f71892ca7d6f5db27ba6a93a38dc64026a3b17f2f1613d11aa702b3768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">System Solaire</title>
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "    </body>
</html>
";
        
        $__internal_5725c652f9f29c247302229b4c49661fc33397d9c7fd98d69a80a3f95752b22b->leave($__internal_5725c652f9f29c247302229b4c49661fc33397d9c7fd98d69a80a3f95752b22b_prof);

        
        $__internal_3e433f71892ca7d6f5db27ba6a93a38dc64026a3b17f2f1613d11aa702b3768f->leave($__internal_3e433f71892ca7d6f5db27ba6a93a38dc64026a3b17f2f1613d11aa702b3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d117086ed70657421e2214ef4645dc588a6cb70dff4a8e1b799719a6ca36510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d117086ed70657421e2214ef4645dc588a6cb70dff4a8e1b799719a6ca36510->enter($__internal_8d117086ed70657421e2214ef4645dc588a6cb70dff4a8e1b799719a6ca36510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a6bdea73e8d1832e36f6388c13d4b97ca19bda9ab309f71a1770208152ec5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6bdea73e8d1832e36f6388c13d4b97ca19bda9ab309f71a1770208152ec5ab->enter($__internal_6a6bdea73e8d1832e36f6388c13d4b97ca19bda9ab309f71a1770208152ec5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visualisation ";
        
        $__internal_6a6bdea73e8d1832e36f6388c13d4b97ca19bda9ab309f71a1770208152ec5ab->leave($__internal_6a6bdea73e8d1832e36f6388c13d4b97ca19bda9ab309f71a1770208152ec5ab_prof);

        
        $__internal_8d117086ed70657421e2214ef4645dc588a6cb70dff4a8e1b799719a6ca36510->leave($__internal_8d117086ed70657421e2214ef4645dc588a6cb70dff4a8e1b799719a6ca36510_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a15a3365694dcedde071a195f0d405d70a78822c70cce823a6448f6b04734220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15a3365694dcedde071a195f0d405d70a78822c70cce823a6448f6b04734220->enter($__internal_a15a3365694dcedde071a195f0d405d70a78822c70cce823a6448f6b04734220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b05549e2c9b3b37cde7e236d49238353670719842fd8d9091f8e4cf322428c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05549e2c9b3b37cde7e236d49238353670719842fd8d9091f8e4cf322428c44->enter($__internal_b05549e2c9b3b37cde7e236d49238353670719842fd8d9091f8e4cf322428c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/styles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_b05549e2c9b3b37cde7e236d49238353670719842fd8d9091f8e4cf322428c44->leave($__internal_b05549e2c9b3b37cde7e236d49238353670719842fd8d9091f8e4cf322428c44_prof);

        
        $__internal_a15a3365694dcedde071a195f0d405d70a78822c70cce823a6448f6b04734220->leave($__internal_a15a3365694dcedde071a195f0d405d70a78822c70cce823a6448f6b04734220_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_af34ea1a0f3a2f7084483eda7523942032a59831b7875ed2ab397004f8a429c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af34ea1a0f3a2f7084483eda7523942032a59831b7875ed2ab397004f8a429c2->enter($__internal_af34ea1a0f3a2f7084483eda7523942032a59831b7875ed2ab397004f8a429c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6eba5a0893f1226b01255bbb9f68216bbd7f2f196b8c21acb4814ea28a39fc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eba5a0893f1226b01255bbb9f68216bbd7f2f196b8c21acb4814ea28a39fc97->enter($__internal_6eba5a0893f1226b01255bbb9f68216bbd7f2f196b8c21acb4814ea28a39fc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>System Solaire</h1>
            <a id=\"toggle-controls\" href=\"#controls\"><i class=\"icon-controls\"></i>Controls</a>
          </div>
          <div id=\"data\">
            <a class=\"sun\" title=\"sun\" href=\"#sunspeed\">Sun</a>
            <a class=\"mercury\" title=\"mercury\" href=\"#mercuryspeed\">Mercury</a>
            <a class=\"venus\" title=\"venus\" href=\"#venusspeed\">Venus</a>
            <a class=\"earth active\" title=\"earth\" href=\"#earthspeed\">Earth</a>
            <a class=\"mars\" title=\"mars\" href=\"#marsspeed\">Mars</a>
            <a class=\"jupiter\" title=\"jupiter\" href=\"#jupiterspeed\">Jupiter</a>
            <a class=\"saturn\" title=\"saturn\" href=\"#saturnspeed\">Saturn</a>
            <a class=\"uranus\" title=\"uranus\" href=\"#uranusspeed\">Uranus</a>
            <a class=\"neptune\" title=\"neptune\" href=\"#neptunespeed\">Neptune</a>
          </div>
          <div id=\"controls\">
            <label class=\"set-view\">
              <input type=\"checkbox\">
            </label>
            <label class=\"set-zoom\">
              <input type=\"checkbox\">
            </label>
            <label>
              <input type=\"radio\" class=\"set-speed\" name=\"scale\" checked>
              <span>Speed</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-size\" name=\"scale\">
              <span>Size</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-distance\" name=\"scale\">
              <span>Distance</span>
            </label>
          </div>
          <div id=\"universe\" class=\"scale-stretched\">
            <div id=\"galaxy\">
              <div id=\"solar-system\" class=\"earth\">
                <div id=\"mercury\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mercury</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"venus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Venus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"earth\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"orbit\">
                      <div class=\"pos\">
                        <div class=\"moon\"></div>
                      </div>
                    </div>
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Earth</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"mars\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mars</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"jupiter\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Jupiter</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"saturn\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <div class=\"ring\"></div>
                      <dl class=\"infos\">
                        <dt>Saturn</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"uranus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Uranus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"neptune\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Neptune</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"sun\">
                  <dl class=\"infos\">
                    <dt>Sun</dt>
                    <dd><span></span></dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
          <script type=\"text/javascript\">
          if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
          }
          </script>
        </body>

      ";
        
        $__internal_6eba5a0893f1226b01255bbb9f68216bbd7f2f196b8c21acb4814ea28a39fc97->leave($__internal_6eba5a0893f1226b01255bbb9f68216bbd7f2f196b8c21acb4814ea28a39fc97_prof);

        
        $__internal_af34ea1a0f3a2f7084483eda7523942032a59831b7875ed2ab397004f8a429c2->leave($__internal_af34ea1a0f3a2f7084483eda7523942032a59831b7875ed2ab397004f8a429c2_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d765e00cd9c2083c572e822ad945b4d2c30ba460395dbee161dd40c7839ccc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d765e00cd9c2083c572e822ad945b4d2c30ba460395dbee161dd40c7839ccc23->enter($__internal_d765e00cd9c2083c572e822ad945b4d2c30ba460395dbee161dd40c7839ccc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4f2181df4b51a926bf1ae448fa20ce79e00c561f6fa156fdc58d399ef8b288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f2181df4b51a926bf1ae448fa20ce79e00c561f6fa156fdc58d399ef8b288d->enter($__internal_d4f2181df4b51a926bf1ae448fa20ce79e00c561f6fa156fdc58d399ef8b288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prefixfree.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.min.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_d4f2181df4b51a926bf1ae448fa20ce79e00c561f6fa156fdc58d399ef8b288d->leave($__internal_d4f2181df4b51a926bf1ae448fa20ce79e00c561f6fa156fdc58d399ef8b288d_prof);

        
        $__internal_d765e00cd9c2083c572e822ad945b4d2c30ba460395dbee161dd40c7839ccc23->leave($__internal_d765e00cd9c2083c572e822ad945b4d2c30ba460395dbee161dd40c7839ccc23_prof);

    }

    public function getTemplateName()
    {
        return "default/visualisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 165,  282 => 164,  273 => 163,  119 => 18,  110 => 17,  97 => 7,  88 => 6,  70 => 5,  58 => 167,  55 => 163,  53 => 17,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Visualisation {% endblock %}</title>
        {% block stylesheets %}
          <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/styles.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">System Solaire</title>
    </head>
    <body>
        {% block body %}

        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>System Solaire</h1>
            <a id=\"toggle-controls\" href=\"#controls\"><i class=\"icon-controls\"></i>Controls</a>
          </div>
          <div id=\"data\">
            <a class=\"sun\" title=\"sun\" href=\"#sunspeed\">Sun</a>
            <a class=\"mercury\" title=\"mercury\" href=\"#mercuryspeed\">Mercury</a>
            <a class=\"venus\" title=\"venus\" href=\"#venusspeed\">Venus</a>
            <a class=\"earth active\" title=\"earth\" href=\"#earthspeed\">Earth</a>
            <a class=\"mars\" title=\"mars\" href=\"#marsspeed\">Mars</a>
            <a class=\"jupiter\" title=\"jupiter\" href=\"#jupiterspeed\">Jupiter</a>
            <a class=\"saturn\" title=\"saturn\" href=\"#saturnspeed\">Saturn</a>
            <a class=\"uranus\" title=\"uranus\" href=\"#uranusspeed\">Uranus</a>
            <a class=\"neptune\" title=\"neptune\" href=\"#neptunespeed\">Neptune</a>
          </div>
          <div id=\"controls\">
            <label class=\"set-view\">
              <input type=\"checkbox\">
            </label>
            <label class=\"set-zoom\">
              <input type=\"checkbox\">
            </label>
            <label>
              <input type=\"radio\" class=\"set-speed\" name=\"scale\" checked>
              <span>Speed</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-size\" name=\"scale\">
              <span>Size</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-distance\" name=\"scale\">
              <span>Distance</span>
            </label>
          </div>
          <div id=\"universe\" class=\"scale-stretched\">
            <div id=\"galaxy\">
              <div id=\"solar-system\" class=\"earth\">
                <div id=\"mercury\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mercury</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"venus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Venus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"earth\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"orbit\">
                      <div class=\"pos\">
                        <div class=\"moon\"></div>
                      </div>
                    </div>
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Earth</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"mars\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mars</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"jupiter\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Jupiter</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"saturn\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <div class=\"ring\"></div>
                      <dl class=\"infos\">
                        <dt>Saturn</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"uranus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Uranus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"neptune\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Neptune</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"sun\">
                  <dl class=\"infos\">
                    <dt>Sun</dt>
                    <dd><span></span></dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
          <script type=\"text/javascript\">
          if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
          }
          </script>
        </body>

      {% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset('js/prefixfree.min.js') }}\"></script>
        <script src=\"{{ asset('js/scripts.min.js') }}\"></script>
      {% endblock %}
    </body>
</html>
", "default/visualisation.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/default/visualisation.html.twig");
    }
}
