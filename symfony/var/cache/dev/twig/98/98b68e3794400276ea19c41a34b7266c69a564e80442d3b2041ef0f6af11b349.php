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
        $__internal_98f911ce1cb4e2801b0fc7f4dfe914fa79bd8bee9aa91e5ab66a11fd0ef6584b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f911ce1cb4e2801b0fc7f4dfe914fa79bd8bee9aa91e5ab66a11fd0ef6584b->enter($__internal_98f911ce1cb4e2801b0fc7f4dfe914fa79bd8bee9aa91e5ab66a11fd0ef6584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

        $__internal_bd90152ef876a1296d572f2a14a1fa4b85ffe695e3f3de2d80aec2bc92f65322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd90152ef876a1296d572f2a14a1fa4b85ffe695e3f3de2d80aec2bc92f65322->enter($__internal_bd90152ef876a1296d572f2a14a1fa4b85ffe695e3f3de2d80aec2bc92f65322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 156
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "    </body>
</html>
";
        
        $__internal_98f911ce1cb4e2801b0fc7f4dfe914fa79bd8bee9aa91e5ab66a11fd0ef6584b->leave($__internal_98f911ce1cb4e2801b0fc7f4dfe914fa79bd8bee9aa91e5ab66a11fd0ef6584b_prof);

        
        $__internal_bd90152ef876a1296d572f2a14a1fa4b85ffe695e3f3de2d80aec2bc92f65322->leave($__internal_bd90152ef876a1296d572f2a14a1fa4b85ffe695e3f3de2d80aec2bc92f65322_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5289da4ae4d92c1a51c41bf0def950ad5ac28bb5b7cfc9705adcd8d398c2bca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5289da4ae4d92c1a51c41bf0def950ad5ac28bb5b7cfc9705adcd8d398c2bca4->enter($__internal_5289da4ae4d92c1a51c41bf0def950ad5ac28bb5b7cfc9705adcd8d398c2bca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd9464bc426fa8303371e61039e8996e8a86903f0cc659854eb35ac942bb2921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9464bc426fa8303371e61039e8996e8a86903f0cc659854eb35ac942bb2921->enter($__internal_dd9464bc426fa8303371e61039e8996e8a86903f0cc659854eb35ac942bb2921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visualisation spatiale";
        
        $__internal_dd9464bc426fa8303371e61039e8996e8a86903f0cc659854eb35ac942bb2921->leave($__internal_dd9464bc426fa8303371e61039e8996e8a86903f0cc659854eb35ac942bb2921_prof);

        
        $__internal_5289da4ae4d92c1a51c41bf0def950ad5ac28bb5b7cfc9705adcd8d398c2bca4->leave($__internal_5289da4ae4d92c1a51c41bf0def950ad5ac28bb5b7cfc9705adcd8d398c2bca4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_515db3b76fc579fad0a51ce85102089b64333b95e09f4e44cf1216ef688300f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515db3b76fc579fad0a51ce85102089b64333b95e09f4e44cf1216ef688300f6->enter($__internal_515db3b76fc579fad0a51ce85102089b64333b95e09f4e44cf1216ef688300f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_289662e0a04bd38ca78cf875b0d7fd9cfe0f1c98ae8183053e09ba512138aab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289662e0a04bd38ca78cf875b0d7fd9cfe0f1c98ae8183053e09ba512138aab8->enter($__internal_289662e0a04bd38ca78cf875b0d7fd9cfe0f1c98ae8183053e09ba512138aab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/prefixfree.min.css"), "html", null, true);
        echo "\"></script>
       ";
        
        $__internal_289662e0a04bd38ca78cf875b0d7fd9cfe0f1c98ae8183053e09ba512138aab8->leave($__internal_289662e0a04bd38ca78cf875b0d7fd9cfe0f1c98ae8183053e09ba512138aab8_prof);

        
        $__internal_515db3b76fc579fad0a51ce85102089b64333b95e09f4e44cf1216ef688300f6->leave($__internal_515db3b76fc579fad0a51ce85102089b64333b95e09f4e44cf1216ef688300f6_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_251ca95c2a8775fbefa40e706ce878bd05e9bc0b2d4eb602628fff91317fbe88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251ca95c2a8775fbefa40e706ce878bd05e9bc0b2d4eb602628fff91317fbe88->enter($__internal_251ca95c2a8775fbefa40e706ce878bd05e9bc0b2d4eb602628fff91317fbe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3004ee90ef8b81b7ffa42b3254f9cd7934231929f2dd54070e5838a4a98cd17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3004ee90ef8b81b7ffa42b3254f9cd7934231929f2dd54070e5838a4a98cd17a->enter($__internal_3004ee90ef8b81b7ffa42b3254f9cd7934231929f2dd54070e5838a4a98cd17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "

        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>3D Solar System<br><span>by <a href=\"https://twitter.com/JulianGarnier\" target=\"_blank\">@JulianGarnier</a></span></h1>
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

        </body>

      ";
        
        $__internal_3004ee90ef8b81b7ffa42b3254f9cd7934231929f2dd54070e5838a4a98cd17a->leave($__internal_3004ee90ef8b81b7ffa42b3254f9cd7934231929f2dd54070e5838a4a98cd17a_prof);

        
        $__internal_251ca95c2a8775fbefa40e706ce878bd05e9bc0b2d4eb602628fff91317fbe88->leave($__internal_251ca95c2a8775fbefa40e706ce878bd05e9bc0b2d4eb602628fff91317fbe88_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee044303e873b214fd8396cf9aa8fdb841ab4d8e18270da59cbd4fcc0822df8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee044303e873b214fd8396cf9aa8fdb841ab4d8e18270da59cbd4fcc0822df8b->enter($__internal_ee044303e873b214fd8396cf9aa8fdb841ab4d8e18270da59cbd4fcc0822df8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ddadc3127ff28e8cc8d4157edb2632b332fbce4826de256a6d9117149a7c9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddadc3127ff28e8cc8d4157edb2632b332fbce4826de256a6d9117149a7c9b3->enter($__internal_8ddadc3127ff28e8cc8d4157edb2632b332fbce4826de256a6d9117149a7c9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
          document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"js/scripts.min.js\"></script>

      ";
        
        $__internal_8ddadc3127ff28e8cc8d4157edb2632b332fbce4826de256a6d9117149a7c9b3->leave($__internal_8ddadc3127ff28e8cc8d4157edb2632b332fbce4826de256a6d9117149a7c9b3_prof);

        
        $__internal_ee044303e873b214fd8396cf9aa8fdb841ab4d8e18270da59cbd4fcc0822df8b->leave($__internal_ee044303e873b214fd8396cf9aa8fdb841ab4d8e18270da59cbd4fcc0822df8b_prof);

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
        return array (  279 => 157,  270 => 156,  120 => 15,  111 => 14,  99 => 9,  95 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 167,  50 => 156,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Visualisation spatiale{% endblock %}</title>
        {% block stylesheets %}

        <script src=\"{{ asset('css/style.css') }}\"></script>
        <script src=\"{{ asset('css/prefixfree.min.css') }}\"></script>
       {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}


        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>3D Solar System<br><span>by <a href=\"https://twitter.com/JulianGarnier\" target=\"_blank\">@JulianGarnier</a></span></h1>
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

        </body>

      {% endblock %}
        {% block javascripts %}

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
          document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"js/scripts.min.js\"></script>

      {% endblock %}
    </body>
</html>
", "default/visualisation.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/default/visualisation.html.twig");
    }
}
