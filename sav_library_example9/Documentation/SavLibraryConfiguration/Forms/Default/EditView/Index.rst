.. include:: ../../../../Includes.txt

.. _editView.128029197:
.. role:: red

=========
Edit view
=========


.. _editView.128029197.128029197:

View ``Default``
================

This view contains the following configuration.


Selected Fields
---------------

.. _editView.128029197.128029197.217895432.tx_savlibraryexample9.title:

.. card::
   :class: mb-md-2

  :Field: title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _editView.128029197.128029197.217895432.tx_savlibraryexample9.graph1:

.. card::
   :class: mb-md-2

  :Field: graph1

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`



  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: sun
   
     :Type: :ref:`Numeric <yolftypo3/sav-library-kickstarter:numeric>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: cloud
   
     :Type: :ref:`Numeric <yolftypo3/sav-library-kickstarter:numeric>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: rain
   
     :Type: :ref:`Numeric <yolftypo3/sav-library-kickstarter:numeric>`
   



.. _editView.128029197.128029197.217895432.tx_savlibraryexample9.graph2:

.. card::
   :class: mb-md-2

  :Field: graph2

  :Type: :ref:`RelationManyToManyAsSubform <yolftypo3/sav-library-kickstarter:relation_n_n>`

  :Configuration:

  ::

    - adddelete = 1
    - addupdown = 1

  .. card:: Subform Content

   
   .. card::
      :class: mb-md-2
   
     :Field: label
   
     :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: value1
   
     :Type: :ref:`Numeric <yolftypo3/sav-library-kickstarter:numeric>`
   
   
   .. card::
      :class: mb-md-2
   
     :Field: value2
   
     :Type: :ref:`Numeric <yolftypo3/sav-library-kickstarter:numeric>`