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

/* personal/admin.html.twig */
class __TwigTemplate_0c2ed1b76ef3492b789fc1b11e1c819b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personal/admin.html.twig"));

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
        yield " | Admin
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
        yield from $this->load("components/navbar.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
<div class=\"edit_info\">

    <h2>Admin Section</h2>
    <div style=\"display: flex; flex-direction: row; gap: 150px; justify-content: center; align-items: flex-start; width: 100%;\">
        ";
        // line 15
        if ((array_key_exists("registrationForm", $context) &&  !(null === (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })())))) {
            // line 16
            yield "            <div style=\"width 100%\">
                <h2>Register a New User</h2>
                ";
            // line 18
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'form_start');
            yield "
                    ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'widget');
            yield "
                    <button class=\"btn btn-primary\">Register</button>
                ";
            // line 21
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_end');
            yield "
            </div>
        ";
        }
        // line 24
        yield "
    <div style=\"display: flex; flex-direction: column; gap: 10px\">
        <h2>create a new event</h2>
        <form action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_new");
        yield "\" method=\"get\" style=\"margin-top: 5px;\">
            <button type=\"submit\" class=\"btn btn-primary\">Create Event</button>
        </form>
        <form action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_remove");
        yield "\" method=\"get\" style=\"margin-top: 5px;\">
            <button type=\"submit\" class=\"btn btn-primary\">Remove Event</button>
        </form>
    </div>
   </div> 
    <form action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userpage", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" method=\"get\" style=\"margin-top: 5px;\">
        <button type=\"submit\" class=\"btn btn-primary\">Go Back</button>
    </form>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "personal/admin.html.twig";
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
        return array (  141 => 35,  133 => 30,  127 => 27,  122 => 24,  116 => 21,  111 => 19,  107 => 18,  103 => 16,  101 => 15,  94 => 10,  92 => 9,  89 => 8,  79 => 7,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ parent() }} | Admin
{% endblock %}

{% block body %}

{% include 'components/navbar.html.twig' %}

<div class=\"edit_info\">

    <h2>Admin Section</h2>
    <div style=\"display: flex; flex-direction: row; gap: 150px; justify-content: center; align-items: flex-start; width: 100%;\">
        {% if registrationForm is defined and registrationForm is not null %}
            <div style=\"width 100%\">
                <h2>Register a New User</h2>
                {{ form_start(registrationForm) }}
                    {{ form_widget(registrationForm) }}
                    <button class=\"btn btn-primary\">Register</button>
                {{ form_end(registrationForm) }}
            </div>
        {% endif %}

    <div style=\"display: flex; flex-direction: column; gap: 10px\">
        <h2>create a new event</h2>
        <form action=\"{{ path('admin_event_new') }}\" method=\"get\" style=\"margin-top: 5px;\">
            <button type=\"submit\" class=\"btn btn-primary\">Create Event</button>
        </form>
        <form action=\"{{ path('admin_event_remove') }}\" method=\"get\" style=\"margin-top: 5px;\">
            <button type=\"submit\" class=\"btn btn-primary\">Remove Event</button>
        </form>
    </div>
   </div> 
    <form action=\"{{ path('userpage', {id: user.id}) }}\" method=\"get\" style=\"margin-top: 5px;\">
        <button type=\"submit\" class=\"btn btn-primary\">Go Back</button>
    </form>
</div>

{% endblock %}", "personal/admin.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/personal/admin.html.twig");
    }
}
