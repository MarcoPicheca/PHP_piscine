<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/searchbar.html.twig */
class __TwigTemplate_5f565c778da19b41c7da4d39dd941438 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/searchbar.html.twig"));

        // line 1
        yield "<div class=\"header\">

    <div class=\"search-container\">

        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"20\" height=\"21\">
            <path fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M.5 10.5a10 10 0 1 0 20 0 10 10 0 1 0-20 0ZM23.5 23.5l-5.929-5.929\">
            </path>
        </svg>

        <input class=\"sbar\" type=\"text\" id=\"user-search\" name=\"search\" placeholder=\"Search users...\" autocomplete=\"off\">
        <ul id=\"search-results\" class=\"search-results\"></ul>

    </div>

    <div class=\"notifications-container\">
        <button id=\"notifications-btn\" class=\"notifications-btn\">
            🔔
            <span id=\"notifications-count\" class=\"notifications-count\">0</span>
        </button>
        <div id=\"notifications-dropdown\" class=\"notifications-dropdown\" style=\"display: none;\">
            <div class=\"notifications-header\">
                <h4>Notifications</h4>
                <a href=\"/notifications\" class=\"view-all-notifications-btn\">See all notifications</a>
            </div>
            <div id=\"notifications-list\" class=\"notifications-list\">
                <p class=\"no-notifications\">No notifications</p>
            </div>
        </div>
    </div>

    <div class=\"dropdown\" id=\"dropdown-toggle\" style=\"cursor: pointer;\">

        <p>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalUser"]) || array_key_exists("originalUser", $context) ? $context["originalUser"] : (function () { throw new RuntimeError('Variable "originalUser" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>

        <img class=\"round-img\"
            src=\"";
        // line 36
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalUser"]) || array_key_exists("originalUser", $context) ? $context["originalUser"] : (function () { throw new RuntimeError('Variable "originalUser" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalUser"]) || array_key_exists("originalUser", $context) ? $context["originalUser"] : (function () { throw new RuntimeError('Variable "originalUser" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default_profile.jpeg"), "html", null, true)));
        yield "\"
            alt=\"Profile Image\"
            style=\"max-width:150px;\">

        <div class=\"user-dropdown\" id=\"dropdown-menu\">
            <ul>
                <li>
                    <a href=\"/profile/edit\">Edit</a>
                </li>
                ";
        // line 45
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", true, true, false, 45) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "role", [], "any", false, false, false, 45)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "role", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45) == "admin"))) {
            // line 46
            yield "                    <li>
                        <a href=\"/admin\">Admin</a>
                    </li>
                ";
        } else {
            // line 50
            yield "                    <li>
                        <a href=\"/userpage/";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\">User Page</a>
                    </li>
                ";
        }
        // line 54
        yield "                <li>
                    <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
                </li>
            </ul>
        </div>
    </div>

</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/searchbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  117 => 55,  114 => 54,  108 => 51,  105 => 50,  99 => 46,  97 => 45,  85 => 36,  79 => 33,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"header\">

    <div class=\"search-container\">

        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"20\" height=\"21\">
            <path fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M.5 10.5a10 10 0 1 0 20 0 10 10 0 1 0-20 0ZM23.5 23.5l-5.929-5.929\">
            </path>
        </svg>

        <input class=\"sbar\" type=\"text\" id=\"user-search\" name=\"search\" placeholder=\"Search users...\" autocomplete=\"off\">
        <ul id=\"search-results\" class=\"search-results\"></ul>

    </div>

    <div class=\"notifications-container\">
        <button id=\"notifications-btn\" class=\"notifications-btn\">
            🔔
            <span id=\"notifications-count\" class=\"notifications-count\">0</span>
        </button>
        <div id=\"notifications-dropdown\" class=\"notifications-dropdown\" style=\"display: none;\">
            <div class=\"notifications-header\">
                <h4>Notifications</h4>
                <a href=\"/notifications\" class=\"view-all-notifications-btn\">See all notifications</a>
            </div>
            <div id=\"notifications-list\" class=\"notifications-list\">
                <p class=\"no-notifications\">No notifications</p>
            </div>
        </div>
    </div>

    <div class=\"dropdown\" id=\"dropdown-toggle\" style=\"cursor: pointer;\">

        <p>{{ originalUser.email }}</p>

        <img class=\"round-img\"
            src=\"{{ originalUser.image is not empty ? originalUser.image : asset('images/default_profile.jpeg') }}\"
            alt=\"Profile Image\"
            style=\"max-width:150px;\">

        <div class=\"user-dropdown\" id=\"dropdown-menu\">
            <ul>
                <li>
                    <a href=\"/profile/edit\">Edit</a>
                </li>
                {% if user.role is defined and user.role and user.role.value == 'admin' %}
                    <li>
                        <a href=\"/admin\">Admin</a>
                    </li>
                {% else %}
                    <li>
                        <a href=\"/userpage/{{ user.id }}\">User Page</a>
                    </li>
                {% endif %}
                <li>
                    <a href=\"{{ path('app_logout') }}\">Logout</a>
                </li>
            </ul>
        </div>
    </div>

</div>", "components/searchbar.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/components/searchbar.html.twig");
    }
}
