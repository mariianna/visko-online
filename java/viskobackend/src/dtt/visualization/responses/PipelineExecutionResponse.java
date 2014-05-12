package dtt.visualization.responses;

import edu.utep.trustlab.visko.execution.PipelineExecutorJob;

/**
 * Response from PipelineExecutionServlet and PipelineJobStatusServlet.
 * 
 * Contains the pipeline status.
 * 
 * @author awknaust
 * 
 */
public class PipelineExecutionResponse extends VisualizationResponse {

	@SuppressWarnings("unused")
	private PipelineStatus status;

	public void setStatus(int id, PipelineExecutorJob job) {
		this.status = new PipelineStatus(id, job);
	}
}
