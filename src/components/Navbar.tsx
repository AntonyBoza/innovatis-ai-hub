
import React, { useState, useEffect } from 'react';
import { Button } from "@/components/ui/button";
import { Menu, X } from "lucide-react";

const Navbar = () => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 10);
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const scrollToSection = (sectionId: string) => {
    setIsMobileMenuOpen(false);
    const section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <header 
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled ? 'bg-white/90 backdrop-blur-sm shadow-sm' : 'bg-transparent'
      }`}
    >
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16 md:h-20">
          {/* Logo */}
          <a href="#" className="flex items-center">
            <h1 className="text-2xl font-bold text-innovatis-blue">
              Innovatis<span className="text-innovatis-purple">AI</span>
            </h1>
          </a>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center space-x-8">
            <button 
              onClick={() => scrollToSection('solutions')}
              className="text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              Solutions
            </button>
            <button 
              onClick={() => scrollToSection('about')}
              className="text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              About
            </button>
            <button 
              onClick={() => scrollToSection('contact')}
              className="text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              Contact
            </button>
            <a 
              href="/blog"
              className="text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              Blog
            </a>
            <Button 
              onClick={() => scrollToSection('contact')}
              className="bg-innovatis-blue hover:bg-innovatis-blue/90 text-white"
            >
              Get Started
            </Button>
          </nav>

          {/* Mobile Menu Button */}
          <div className="md:hidden">
            <button
              onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
              className="text-innovatis-gray-dark"
            >
              {isMobileMenuOpen ? (
                <X className="h-6 w-6" />
              ) : (
                <Menu className="h-6 w-6" />
              )}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile Menu */}
      {isMobileMenuOpen && (
        <div className="md:hidden bg-white shadow-md">
          <div className="px-4 pt-2 pb-4 space-y-3">
            <button
              onClick={() => scrollToSection('solutions')}
              className="block w-full text-left py-2 text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              Solutions
            </button>
            <button
              onClick={() => scrollToSection('about')}
              className="block w-full text-left py-2 text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              About
            </button>
            <button
              onClick={() => scrollToSection('contact')}
              className="block w-full text-left py-2 text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              Contact
            </button>
            <a
              href="/blog"
              className="block w-full text-left py-2 text-innovatis-gray-dark hover:text-innovatis-blue transition-colors"
            >
              Blog
            </a>
            <Button 
              onClick={() => scrollToSection('contact')}
              className="w-full bg-innovatis-blue hover:bg-innovatis-blue/90 text-white"
            >
              Get Started
            </Button>
          </div>
        </div>
      )}
    </header>
  );
};

export default Navbar;
