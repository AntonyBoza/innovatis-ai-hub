
import React from 'react';

const Footer = () => {
  return (
    <footer className="bg-innovatis-blue text-white">
      <div className="section-container py-12">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div className="col-span-1 md:col-span-2">
            <h2 className="text-2xl font-bold mb-4">
              Innovatis<span className="text-innovatis-purple">AI</span>
            </h2>
            <p className="mb-4 text-white/80 max-w-md">
              Empowering businesses with innovative AI solutions for growth, 
              efficiency, and digital transformation.
            </p>
            <p className="text-white/80">
              © {new Date().getFullYear()} Innovatis AI. All rights reserved.
            </p>
          </div>
          
          <div>
            <h3 className="text-lg font-semibold mb-4">Solutions</h3>
            <ul className="space-y-2 text-white/80">
              <li><a href="#" className="hover:text-white transition-colors">AI Consulting</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Predictive Analytics</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Conversational AI</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Data Management</a></li>
              <li><a href="#" className="hover:text-white transition-colors">AI Security</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Media Management</a></li>
            </ul>
          </div>
          
          <div>
            <h3 className="text-lg font-semibold mb-4">Company</h3>
            <ul className="space-y-2 text-white/80">
              <li><a href="#about" className="hover:text-white transition-colors">About Us</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Careers</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Blog</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Privacy Policy</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Terms of Service</a></li>
              <li><a href="#contact" className="hover:text-white transition-colors">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
