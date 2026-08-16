.. include:: ../../../../Includes.txt

.. _singleView.128029197:
.. role:: red

===========
Single view
===========


.. _singleView.128029197.128029197:

View ``Default``
================

This view contains the following configuration.

Title Bar
---------

::

   ###title###

Selected Fields
---------------

.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.title:

.. card::
   :class: mb-md-2

  :Field: title

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - doNotDisplay = 1


.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_begin:

.. card::
   :class: mb-md-2

  :Field: date_begin

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`

  :Configuration:

  ::

    - fusion = begin


.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.date_end:

.. card::
   :class: mb-md-2

  :Field: date_end

  :Type: :ref:`DateTime <yolftypo3/sav-library-kickstarter:dateAndTime>`

  :Configuration:

  ::

    - fusion = end


.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.location:

.. card::
   :class: mb-md-2

  :Field: location

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.description:

.. card::
   :class: mb-md-2

  :Field: description

  :Type: :ref:`RichTextEditor <yolftypo3/sav-library-kickstarter:richTextEditor>`

.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.link:

.. card::
   :class: mb-md-2

  :Field: link

  :Type: :ref:`Link <yolftypo3/sav-library-kickstarter:link>`

  :Configuration:

  ::

    - cutIfNull = 1


.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.organized_by:

.. card::
   :class: mb-md-2

  :Field: organized_by

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

.. _singleView.128029197.128029197.217895432.tx_savcalendarmvc_domain_model_event.email:

.. card::
   :class: mb-md-2

  :Field: email

  :Type: :ref:`String <yolftypo3/sav-library-kickstarter:string>`

  :Configuration:

  ::

    - func = makeEmailLink