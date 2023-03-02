<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login/index.html.twig */
class __TwigTemplate_2d608ee766b735fbc5bf0d7fe3b3379f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "
    <section class=\"mt-5\">
        <div class=\"px-4 py-5 px-md-5 text-center text-lg-start\" style=\"background-color: hsl(0, 0%, 96%)\">
            <div class=\"container\">
            <div class=\"row gx-lg-5 align-items-center\">
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                <h1 class=\"my-5 display-3 fw-bold ls-tight\">
                    The best offer <br />
                    <span class=\"text-primary\">for your business</span>
                </h1>
                <p style=\"color: hsl(217, 10%, 50.8%)\">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                    quibusdam tempora at cupiditate quis eum maiores libero
                    veritatis? Dicta facilis sint aliquid ipsum atque?
                </p>
                </div>

                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"card\">
                        <div class=\"card-body py-5 px-md-5\">
                        <form action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                            <!-- Email input -->
                            <div class=\"form-outline mb-4\">
                                <label for=\"username\" class=\"form-label\">Email:</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" class=\"form-control\">
                            </div>

                            <!-- Password input -->
                            <div class=\"form-outline mb-4\">
                                <label for=\"password\" class=\"form-label\">Password:</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">
                            </div>
                            
                            <!-- Submit button -->
                            <button type=\"submit\" class=\"btn btn-primary btn-block mb-4\">
                            Connexion
                            </button>
                            </form>
                            <!-- Register button -->
                            <form action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"post\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block mb-4 pl-1\">
                                Creer un compte
                                </button>
                            </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>


    ";
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        // line 69
        echo "
        ";
        // line 71
        echo "        ";
        // line 72
        echo "
        ";
        // line 74
        echo "        ";
        // line 75
        echo "
        ";
        // line 77
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 77,  155 => 75,  153 => 74,  150 => 72,  148 => 71,  145 => 69,  143 => 68,  141 => 67,  122 => 50,  100 => 31,  77 => 10,  71 => 8,  68 => 7,  58 => 6,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/login/index.html.twig #}
{% extends 'base.html.twig' %}

{# ... #}

{% block body %}
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

    <section class=\"mt-5\">
        <div class=\"px-4 py-5 px-md-5 text-center text-lg-start\" style=\"background-color: hsl(0, 0%, 96%)\">
            <div class=\"container\">
            <div class=\"row gx-lg-5 align-items-center\">
                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                <h1 class=\"my-5 display-3 fw-bold ls-tight\">
                    The best offer <br />
                    <span class=\"text-primary\">for your business</span>
                </h1>
                <p style=\"color: hsl(217, 10%, 50.8%)\">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                    quibusdam tempora at cupiditate quis eum maiores libero
                    veritatis? Dicta facilis sint aliquid ipsum atque?
                </p>
                </div>

                <div class=\"col-lg-6 mb-5 mb-lg-0\">
                    <div class=\"card\">
                        <div class=\"card-body py-5 px-md-5\">
                        <form action=\"{{ path('app_login') }}\" method=\"post\">
                            <!-- Email input -->
                            <div class=\"form-outline mb-4\">
                                <label for=\"username\" class=\"form-label\">Email:</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" class=\"form-control\">
                            </div>

                            <!-- Password input -->
                            <div class=\"form-outline mb-4\">
                                <label for=\"password\" class=\"form-label\">Password:</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">
                            </div>
                            
                            <!-- Submit button -->
                            <button type=\"submit\" class=\"btn btn-primary btn-block mb-4\">
                            Connexion
                            </button>
                            </form>
                            <!-- Register button -->
                            <form action=\"{{ path('app_register') }}\" method=\"post\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block mb-4 pl-1\">
                                Creer un compte
                                </button>
                            </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>


    {# <form action=\"{{ path('app_login') }}\" method=\"post\"> #}
        {# <label for=\"username\">Email:</label> #}
        {# <input type=\"text\" id=\"username\" name=\"_username\" value=\"\"> #}

        {# <label for=\"password\">Password:</label> #}
        {# <input type=\"password\" id=\"password\" name=\"_password\"> #}

        {# If you want to control the URL the user is redirected to on success #}
        {# <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('app_board_index') }}\"> #}

        {# <button type=\"submit\">login</button> #}
    {# </form> #}
{% endblock %}
", "login/index.html.twig", "C:\\Users\\ugora\\Desktop\\dev\\frello\\templates\\login\\index.html.twig");
    }
}
