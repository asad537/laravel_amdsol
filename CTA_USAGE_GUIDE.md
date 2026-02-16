# Global CTA Component Usage Guide

## Location
The reusable CTA component is located at:
`resources/views/partials/cta-section.blade.php`

## How to Use

### Basic Usage (with default text)
```blade
@include('partials.cta-section')
```

### Custom Usage (with your own text)
```blade
@include('partials.cta-section', [
    'title' => 'Your Custom Title',
    'description' => 'Your custom description text here.',
    'buttonText' => 'Contact Us',
    'buttonLink' => url('contact-us.php')
])
```

## Examples for Different Pages

### Patient Services Page
```blade
@include('partials.cta-section', [
    'title' => 'Manage Your Billing with Confidence',
    'description' => 'View charges, make payments, and stay informed securely and easily.',
    'buttonText' => 'Get Started',
    'buttonLink' => url('contact-us.php')
])
```

### Live Support Page
```blade
@include('partials.cta-section', [
    'title' => 'Need Immediate Billing Support?',
    'description' => 'Fast, secure, HIPAA-compliant support—when you need it.',
    'buttonText' => 'Get Started',
    'buttonLink' => url('contact-us.php')
])
```

### Practice Management Page
```blade
@include('partials.cta-section', [
    'title' => 'Optimize Your Practice Today',
    'description' => 'We handle workflows you focus on patients.',
    'buttonText' => 'Schedule a Demo',
    'buttonLink' => url('contact-us.php')
])
```

### Cardiology Page
```blade
@include('partials.cta-section', [
    'title' => 'Ready to Optimize Your Cardiology Billing?',
    'description' => 'Partner with experts who understand your specialty.',
    'buttonText' => 'Request Pricing',
    'buttonLink' => url('contact-us.php')
])
```

### Hospital Billing Page
```blade
@include('partials.cta-section', [
    'title' => 'Transform Your Hospital Revenue Cycle',
    'description' => 'Let us handle the complexity while you focus on patient care.',
    'buttonText' => 'Get Free Quote',
    'buttonLink' => url('contact-us.php')
])
```

## Features
- ✅ Fully responsive (mobile, tablet, desktop)
- ✅ Consistent styling across all pages
- ✅ Wave background pattern
- ✅ Smooth hover effects
- ✅ Easy to customize text
- ✅ Single source of truth for CTA design

## Replacing Old CTA Sections

### Step 1: Remove old CTA code
Delete the old CTA section HTML and CSS from your page

### Step 2: Add the new component
Add this line where you want the CTA to appear:
```blade
@include('partials.cta-section', [
    'title' => 'Your Title',
    'description' => 'Your Description',
    'buttonText' => 'Button Text',
    'buttonLink' => url('your-link')
])
```

### Step 3: Remove old CSS
Remove any old CTA-related CSS classes like:
- `.cta-pricing-section`
- `.cta-container`
- `.cta-content`
- `.cta-request-btn`

The global component has its own CSS with `global-` prefix to avoid conflicts.

## Benefits
1. **Consistency**: Same design across all pages
2. **Easy Updates**: Change once, updates everywhere
3. **Less Code**: No need to repeat CSS and HTML
4. **Maintainability**: Single file to manage
5. **Flexibility**: Easy to customize per page
