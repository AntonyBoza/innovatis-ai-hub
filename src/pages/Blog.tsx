
import React from 'react';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';

const Blog = () => {
  return (
    <div className="min-h-screen">
      <Navbar />
      <div className="pt-32 pb-20">
        <div className="container mx-auto px-4 sm:px-6 lg:px-8">
          <h1 className="text-3xl md:text-4xl font-bold mb-10 text-center">
            InnovatisAI Blog
          </h1>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {/* This is a placeholder for blog posts */}
            <div className="bg-white rounded-lg shadow-md overflow-hidden">
              <div className="h-48 bg-innovatis-gray-light"></div>
              <div className="p-6">
                <p className="text-sm text-innovatis-gray-dark mb-2">April 9, 2025</p>
                <h3 className="text-xl font-semibold mb-3">The Future of AI in Business</h3>
                <p className="text-innovatis-gray-dark mb-4">
                  Explore how artificial intelligence is transforming business operations and creating new opportunities for growth.
                </p>
                <button className="text-innovatis-blue font-medium hover:underline">
                  Read More →
                </button>
              </div>
            </div>
            
            <div className="bg-white rounded-lg shadow-md overflow-hidden">
              <div className="h-48 bg-innovatis-gray-light"></div>
              <div className="p-6">
                <p className="text-sm text-innovatis-gray-dark mb-2">April 2, 2025</p>
                <h3 className="text-xl font-semibold mb-3">How to Integrate AI Solutions</h3>
                <p className="text-innovatis-gray-dark mb-4">
                  A step-by-step guide to successfully implementing AI solutions within your organization's existing infrastructure.
                </p>
                <button className="text-innovatis-blue font-medium hover:underline">
                  Read More →
                </button>
              </div>
            </div>
            
            <div className="bg-white rounded-lg shadow-md overflow-hidden">
              <div className="h-48 bg-innovatis-gray-light"></div>
              <div className="p-6">
                <p className="text-sm text-innovatis-gray-dark mb-2">March 25, 2025</p>
                <h3 className="text-xl font-semibold mb-3">Case Study: AI-Driven Analytics</h3>
                <p className="text-innovatis-gray-dark mb-4">
                  Learn how our client achieved 40% improvement in decision-making accuracy using our AI-powered analytics platform.
                </p>
                <button className="text-innovatis-blue font-medium hover:underline">
                  Read More →
                </button>
              </div>
            </div>
          </div>
          
          <div className="mt-12 text-center">
            <p className="text-innovatis-gray-dark mb-4">More blog posts coming soon!</p>
          </div>
        </div>
      </div>
      <Footer />
    </div>
  );
};

export default Blog;
