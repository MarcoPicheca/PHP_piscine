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

/* personal/personal.html.twig */
class __TwigTemplate_b1aa05fdd1c5625a9f3869f37236dddf extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personal/personal.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | Profile
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "
";
        // line 9
        yield from $this->load("components/searchbar.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield from $this->load("components/navbar.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
<div class=\"main_profile\">

    ";
        // line 14
        yield from $this->load("components/userinfo.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "    
    ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)))) {
            // line 17
            yield "        <div class=\"chat-action\" style=\"margin: 1rem 0; text-align: center;\">
            <a href=\"";
            // line 18
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_index");
            yield "?user=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
            yield "\" class=\"btn btn-primary\" style=\"margin-top: 10px; display: inline-block;\">
                💬 Invia Messaggio a ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), "html", null, true);
            yield "
            </a>
        </div>
    ";
        }
        // line 23
        yield "
    <div class=\"agenda\">
        <h2>Event</h2>
        <ul class=\"event-list\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 28
            yield "                <li class=\"event-item\">
                    <p class=\"event-name\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getName", [], "method", false, false, false, 29), "html", null, true);
            yield "</p>
                    <h3 class=\"event-title\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getTitle", [], "method", false, false, false, 30), "html", null, true);
            yield "</h3>
                    <div class=\"participant\">
                        ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getParticipants", [], "method", false, false, false, 32), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getMaxParticipants", [], "method", false, false, false, 32), "html", null, true);
            yield "
                    </div>
                    <div class=\"event-info\">
                        <p>Date: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getDate", [], "method", false, false, false, 35), "d-m-Y"), "html", null, true);
            yield "</p>
                        <p>Starting: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getStartTime", [], "method", false, false, false, 36), "H:i"), "html", null, true);
            yield " h</p>
                        <p>Ending: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getEndTime", [], "method", false, false, false, 37), "H:i"), "html", null, true);
            yield " h</p>
                        <p>Duration: ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getFormattedDuration", [], "method", false, false, false, 38), "html", null, true);
            yield " h</p>
                    </div>

                <div class=\"event-description\">
                    ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 42), "html", null, true);
            yield "
                </div>

                <div class=\"event-action\">
                    ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "users", [], "any", false, false, false, 46), "contains", [(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })())], "method", false, false, false, 46) == true)) {
                // line 47
                yield "                        <a class=\"event-button\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userpage_event_deregistration", ["event_id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["event"], "id", [], "any", false, false, false, 48), "user_id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 49
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
                // line 50
                yield "\">Unsubscribe</a>
                    ";
            } else {
                // line 52
                yield "                        <a class=\"event-button\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userpage_event_registration", ["event_id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["event"], "id", [], "any", false, false, false, 53), "user_id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 54
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
                // line 55
                yield "\">Subscribe</a>
                    ";
            }
            // line 57
            yield "                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "    </ul>
</div>

    <div class=\"tbd\">
        <h2>Active Projects</h2>
        <ul>
            ";
        // line 66
        $context["activeProjects"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "userProjects", [], "any", false, false, false, 66), function ($__up__) use ($context, $macros) { $context["up"] = $__up__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["up"]) || array_key_exists("up", $context) ? $context["up"] : (function () { throw new RuntimeError('Variable "up" does not exist.', 66, $this->source); })()), "validated", [], "any", false, false, false, 66); });
        // line 67
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeProjects"]) || array_key_exists("activeProjects", $context) ? $context["activeProjects"] : (function () { throw new RuntimeError('Variable "activeProjects" does not exist.', 67, $this->source); })())) > 0)) {
            // line 68
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeProjects"]) || array_key_exists("activeProjects", $context) ? $context["activeProjects"] : (function () { throw new RuntimeError('Variable "activeProjects" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userProject"]) {
                // line 69
                yield "                    <li>
                        <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["userProject"], "project", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\">
                            ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["userProject"], "project", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['userProject'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "            ";
        } else {
            // line 76
            yield "                <li>No active projects registered</li>
            ";
        }
        // line 78
        yield "        </ul>

        ";
        // line 80
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)))) {
            // line 81
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
            yield "\" class=\"btn btn-primary\" style=\"margin-top: 10px; display: inline-block;\">
                View All Projects & Register
            </a>
        ";
        }
        // line 85
        yield "    </div>

    <div class=\"tbd\">
        <h2>Completed Projects</h2>
        <ul>
            ";
        // line 90
        $context["completedProjects"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "userProjects", [], "any", false, false, false, 90), function ($__up__) use ($context, $macros) { $context["up"] = $__up__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["up"]) || array_key_exists("up", $context) ? $context["up"] : (function () { throw new RuntimeError('Variable "up" does not exist.', 90, $this->source); })()), "validated", [], "any", false, false, false, 90); });
        // line 91
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["completedProjects"]) || array_key_exists("completedProjects", $context) ? $context["completedProjects"] : (function () { throw new RuntimeError('Variable "completedProjects" does not exist.', 91, $this->source); })())) > 0)) {
            // line 92
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["completedProjects"]) || array_key_exists("completedProjects", $context) ? $context["completedProjects"] : (function () { throw new RuntimeError('Variable "completedProjects" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userProject"]) {
                // line 93
                yield "                    <li>
                        <a href=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["userProject"], "project", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]), "html", null, true);
                yield "\">
                            ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["userProject"], "project", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['userProject'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "            ";
        } else {
            // line 100
            yield "                <li>No completed projects yet</li>
            ";
        }
        // line 102
        yield "        </ul>
    </div>

    <div class=\"tbd\">
        <h2>Courses</h2>
    </div>

    <div class=\"tbd\">
        <h2>Pending evaluations</h2>
            <form action=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluations");
        yield "\" method=\"get\">
                <button class=\"btn btn-primary\" type=\"submit\">Menage Slots</button>
            </form>

        <h1>Open Slots for Correction</h1>

        ";
        // line 117
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 117, $this->source); })()))) {
            // line 118
            yield "            <p>No open slots available.</p>
        ";
        } else {
            // line 120
            yield "            <ul>
                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["slot"]) {
                // line 122
                yield "                    <li>
                        ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "startTime", [], "any", false, false, false, 123), "Y-m-d H:i"), "html", null, true);
                yield " → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "endTime", [], "any", false, false, false, 123), "Y-m-d H:i"), "html", null, true);
                yield "
                        (created by: ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "userId", [], "any", false, false, false, 124), "email", [], "any", false, false, false, 124), "html", null, true);
                yield ")
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['slot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "            </ul>
        ";
        }
        // line 129
        yield "    </div>

    ";
        // line 132
        yield "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "personal/personal.html.twig";
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
        return array (  364 => 132,  360 => 129,  356 => 127,  347 => 124,  341 => 123,  338 => 122,  334 => 121,  331 => 120,  327 => 118,  325 => 117,  316 => 111,  305 => 102,  301 => 100,  298 => 99,  288 => 95,  284 => 94,  281 => 93,  276 => 92,  273 => 91,  271 => 90,  264 => 85,  256 => 81,  254 => 80,  250 => 78,  246 => 76,  243 => 75,  233 => 71,  229 => 70,  226 => 69,  221 => 68,  218 => 67,  216 => 66,  208 => 60,  200 => 57,  196 => 55,  194 => 54,  193 => 53,  191 => 52,  187 => 50,  185 => 49,  184 => 48,  182 => 47,  180 => 46,  173 => 42,  166 => 38,  162 => 37,  158 => 36,  154 => 35,  146 => 32,  141 => 30,  137 => 29,  134 => 28,  130 => 27,  124 => 23,  117 => 19,  111 => 18,  108 => 17,  106 => 16,  103 => 15,  101 => 14,  96 => 11,  94 => 10,  92 => 9,  89 => 8,  79 => 7,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ parent() }} | Profile
{% endblock %}

{% block body %}

{% include 'components/searchbar.html.twig' %}
{% include 'components/navbar.html.twig' %}

<div class=\"main_profile\">

    {% include 'components/userinfo.html.twig' %}
    
    {% if app.user and app.user.id != user.id %}
        <div class=\"chat-action\" style=\"margin: 1rem 0; text-align: center;\">
            <a href=\"{{ path('chat_index') }}?user={{ user.id }}\" class=\"btn btn-primary\" style=\"margin-top: 10px; display: inline-block;\">
                💬 Invia Messaggio a {{ user.firstName }}
            </a>
        </div>
    {% endif %}

    <div class=\"agenda\">
        <h2>Event</h2>
        <ul class=\"event-list\">
            {% for event in events %}
                <li class=\"event-item\">
                    <p class=\"event-name\">{{ event.getName() }}</p>
                    <h3 class=\"event-title\">{{ event.getTitle() }}</h3>
                    <div class=\"participant\">
                        {{ event.getParticipants() }}/{{ event.getMaxParticipants() }}
                    </div>
                    <div class=\"event-info\">
                        <p>Date: {{ event.getDate()|date('d-m-Y') }}</p>
                        <p>Starting: {{ event.getStartTime()|date('H:i') }} h</p>
                        <p>Ending: {{ event.getEndTime()|date('H:i') }} h</p>
                        <p>Duration: {{ event.getFormattedDuration() }} h</p>
                    </div>

                <div class=\"event-description\">
                    {{ event.description }}
                </div>

                <div class=\"event-action\">
                    {% if event.users.contains(user) == true %}
                        <a class=\"event-button\" href=\"{{ path('userpage_event_deregistration', {
                            'event_id': event.id,
                            'user_id': user.id
                        }) }}\">Unsubscribe</a>
                    {% else %}
                        <a class=\"event-button\" href=\"{{ path('userpage_event_registration', {
                            'event_id': event.id,
                            'user_id': user.id
                        }) }}\">Subscribe</a>
                    {% endif %}
                </div>
            </li>
        {% endfor %}
    </ul>
</div>

    <div class=\"tbd\">
        <h2>Active Projects</h2>
        <ul>
            {% set activeProjects = user.userProjects|filter(up => not up.validated) %}
            {% if activeProjects|length > 0 %}
                {% for userProject in activeProjects %}
                    <li>
                        <a href=\"{{ path('project_show', { id: userProject.project.id }) }}\">
                            {{ userProject.project.name }}
                        </a>
                    </li>
                {% endfor %}
            {% else %}
                <li>No active projects registered</li>
            {% endif %}
        </ul>

        {% if app.user and app.user.id == user.id %}
            <a href=\"{{ path('project_list') }}\" class=\"btn btn-primary\" style=\"margin-top: 10px; display: inline-block;\">
                View All Projects & Register
            </a>
        {% endif %}
    </div>

    <div class=\"tbd\">
        <h2>Completed Projects</h2>
        <ul>
            {% set completedProjects = user.userProjects|filter(up => up.validated) %}
            {% if completedProjects|length > 0 %}
                {% for userProject in completedProjects %}
                    <li>
                        <a href=\"{{ path('project_show', { id: userProject.project.id }) }}\">
                            {{ userProject.project.name }}
                        </a>
                    </li>
                {% endfor %}
            {% else %}
                <li>No completed projects yet</li>
            {% endif %}
        </ul>
    </div>

    <div class=\"tbd\">
        <h2>Courses</h2>
    </div>

    <div class=\"tbd\">
        <h2>Pending evaluations</h2>
            <form action=\"{{ path('evaluations') }}\" method=\"get\">
                <button class=\"btn btn-primary\" type=\"submit\">Menage Slots</button>
            </form>

        <h1>Open Slots for Correction</h1>

        {% if slots is empty %}
            <p>No open slots available.</p>
        {% else %}
            <ul>
                {% for slot in slots %}
                    <li>
                        {{ slot.startTime|date('Y-m-d H:i') }} → {{ slot.endTime|date('Y-m-d H:i') }}
                        (created by: {{ slot.userId.email }})
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    {# Additional TBD sections #}
</div>

{% endblock %}
", "personal/personal.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/personal/personal.html.twig");
    }
}
